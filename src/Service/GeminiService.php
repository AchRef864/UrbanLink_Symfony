<?php

namespace App\Service;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{Request, JsonResponse, Response};
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\DBAL\Schema\Column;

class GeminiService extends AbstractController
{
    private HttpClientInterface $client;
    private string $apiKey;
    private ManagerRegistry $doctrine;
    private array $conversationHistory = [];
    private \Doctrine\DBAL\Connection $connection; // Add the connection property

    public function __construct(HttpClientInterface $client, string $apiKey, ManagerRegistry $doctrine)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
        $this->doctrine = $doctrine;
        $this->connection = $this->doctrine->getConnection(); // Initialize the connection
    }

    public function ask(string $question, array $contextData = []): string
    {
        $schema = $this->getDatabaseContext();
        $data = $this->retrieveRelevantData($question);

        $prompt = $this->buildPrompt($question, $schema, array_merge($contextData, $data));

        try {
            $response = $this->client->request(
                'POST',
                'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent',
                [
                    'query' => ['key' => $this->apiKey],
                    'json' => [
                        'contents' => [[
                            'parts' => [[
                                'text' => $prompt
                            ]]
                        ]],
                        'safetySettings' => [
                            'category' => 'HARM_CATEGORY_DANGEROUS_CONTENT',
                            'threshold' => 'BLOCK_NONE'
                        ]
                    ]
                ]
            );

            $responseData = $response->toArray();
            error_log("Gemini API Response: " . json_encode($responseData, JSON_PRETTY_PRINT));

            return $responseData['candidates'][0]['content']['parts'][0]['text']
                ?? "Sorry, I couldn't process that request.";
        } catch (\Exception $e) {
            error_log("LLM API Error: " . $e->getMessage());
            return "Sorry, there was an error communicating with the language model. Please try again.";
        }
    }

    private function retrieveRelevantData(string $question, int $limit = 5): array
    {
        $data = [];
        $conn = $this->doctrine->getConnection();

        $questionParts = explode(' ', strtolower($question));
        $potentialTable = '';
        foreach ($questionParts as $part) {
            if (in_array(rtrim($part, 's'), $this->getTableNames())) {
                $potentialTable = rtrim($part, 's');
                break;
            }
        }

        if ($potentialTable) {
            try {
                $sql = "SELECT * FROM $potentialTable LIMIT :limit";
                $stmt = $conn->prepare($sql);
                $results = $stmt->executeQuery(['limit' => $limit])->fetchAllAssociative();
                if (!empty($results)) {
                    $tableData = ['data' => $results];
                    $columns = $this->connection->getSchemaManager()->listTableColumns($potentialTable);
                    $columnInfo = [];
                    foreach ($columns as $column) {
                        $columnInfo[$column->getName()] = $column->getType()->getName();
                    }
                    $tableData['columns'] = $columnInfo;
                    $data[$potentialTable] = $tableData;
                }
            } catch (\Exception $e) {
                error_log("Erreur lors de la récupération des données pour la table '$potentialTable': " . $e->getMessage());
            }
        }

        // Consider fetching more detailed info based on keywords in the question
        // For example, if the question asks about "status" in "orders", fetch distinct statuses.

        return $data;
    }

    private function getTableNames(): array
    {
        $conn = $this->doctrine->getConnection();
        $sql = "SHOW TABLES";
        $stmt = $conn->executeQuery($sql);
        $tables = $stmt->fetchAllAssociative();
        $tableNames = [];

        foreach ($tables as $tableInfo) {
            $tableName = $tableInfo[0] ?? null;
            if ($tableName) {
                $tableNames[] = $tableName;
            }
        }

        return $tableNames;
    }

    private function buildPrompt(string $question, string $schema, array $data = []): string
    {
        $prompt = <<<PROMPT
You are a database assistant for a non-technical administrator.
Your primary goal is to help the administrator understand the data within the database in detail.

You have access to the following database schema:

$schema

Answer the following question about the database in a clear, concise, and direct way that a database administrator with no programming or SQL knowledge would understand. Focus on explaining what the data means and its characteristics.

If relevant data from the database is provided below, use it to give a precise and accurate answer and provide insights into the data's content and structure. If no relevant data is provided, answer based on the schema alone.

Avoid providing SQL queries unless explicitly asked.

Question: $question

PROMPT;

        if (!empty($data)) {
            $prompt .= "\n\nRelevant Data:\n" . json_encode($data, JSON_PRETTY_PRINT);
            $prompt .= "\n\nBased on this data, please answer the question and provide detailed insights about the information presented. For example, explain the different values, their meaning, and any patterns you observe.";
        }

        return $prompt;
    }

    private function getDatabaseContext(): string
    {
        $tables = $this->doctrine->getConnection()->executeQuery("SHOW TABLES")->fetchAllAssociative();
        $schema = "Database Schema:\n\n";

        foreach ($tables as $table) {
            $tableName = reset($table);
            $schema .= "Table: $tableName\n";

            $columns = $this->doctrine->getConnection()->executeQuery("SHOW COLUMNS FROM $tableName")->fetchAllAssociative();
            foreach ($columns as $column) {
                $schema .= "  - " . $column['Field'] . " (" . $column['Type'] . ")";
                if ($column['Null'] === 'NO') {
                    $schema .= " NOT NULL";
                }
                if (!empty($column['Key'])) {
                    $schema .= " " . $column['Key'] . " KEY";
                }
                if ($column['Extra'] === 'auto_increment') {
                    $schema .= " AUTO_INCREMENT";
                }
                $schema .= "\n";
            }
            $schema .= "\n";
        }

        return $schema;
    }

    public function fetchData(string $table, array|string $select = '*', string $where = '', array $params = []): array
    {
        $conn = $this->doctrine->getConnection();
        $sql = "SELECT " . (is_array($select) ? implode(', ', $select) : $select) . " FROM " . $table;

        if (!empty($where)) {
            $sql .= " WHERE " . $where;
        }

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery($params);
        return $resultSet->fetchAllAssociative();
    }

    public function countRows(string $tableName, string $where = null, array $params = []): int
    {
        $conn = $this->doctrine->getConnection();
        $sql  = "SELECT COUNT(*) FROM `$tableName`" . ($where ? " WHERE $where" : "");

        // executeQuery() renvoie un Result qui implémente fetchOne()
        $count = $conn
            ->executeQuery($sql, $params)
            ->fetchOne();

        return (int) $count;
    }


    private function handleCountRows(string $question, GeminiService $gemini, string $tableName): JsonResponse
    {
        $count = $gemini->countRows($tableName);
        $response = "There are " . $count . " rows in the " . $tableName . " table.";
        $this->updateConversationHistory($question, $response);
        return $this->json(['response' => $response]);
    }

    private function handleHowManyUsers(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('users');
        $response = "There are " . $count . " users in the system.";
        $this->updateConversationHistory($question, $response);
        return $this->json(['response' => $response]);
    }

    private function handleUserRoles(string $question, GeminiService $gemini): JsonResponse
    {
        $roles = $gemini->fetchData('users', 'DISTINCT role');
        $roleList = array_column($roles, 'role');
        $response = "The different roles in the users table are: " . implode(", ", $roleList) . ".";
        $this->updateConversationHistory($question, $response);
        return $this->json(['response' => $response]);
    }

    private function handleHeniExists(string $question, GeminiService $gemini): JsonResponse
    {
        $heniExists = $gemini->countRows('users', 'name = ?', ['heni']) > 0;
        $response = $heniExists ? "Yes, 'heni' exists in the users table." : "No, 'heni' does not exist in the users table.";
        $this->updateConversationHistory($question, $response);
        return $this->json(['response' => $response]);
    }

    private function handleReservations(string $question, GeminiService $gemini): JsonResponse
    {
        $response = $gemini->ask($question);
        $this->updateConversationHistory($question, $response);
        return $this->json(['response' => $response]);
    }

    private function handleTaxis(string $question, GeminiService $gemini): JsonResponse
    {
        $response = $gemini->ask($question);
        $this->updateConversationHistory($question, $response);
        return $this->json(['response' => $response]);
    }

    private function handleEmailOfUserId(string $question, GeminiService $gemini): JsonResponse
    {
        if (preg_match('/email of user with id (\d+)/i', $question, $matches)) {
            $userId = (int) $matches[1];
            $email = $gemini->fetchData('users', 'email', 'user_id = ?', [$userId]);
            if ($email) {
                $response = "The email of user_id " . $userId . " is: " . $email[0]['email'];
            } else {
                $response = "No user found with user_id " . $userId . ".";
            }
        } else {
            $response = "Please specify a user_id to find the email.";
        }
        $this->updateConversationHistory($question, $response);
        return $this->json(['response' => $response]);
    }

    private function handleAddUser(string $question, GeminiService $gemini): JsonResponse
    {
        $response = $gemini->ask("The user wants to add a new user. Explain what information is needed and the format in which it should be provided.", []);
        $this->updateConversationHistory($question, $response);
        return $this->json(['response' => $response]);
    }

    private function handleShowDataRequest(string $question, GeminiService $gemini): JsonResponse
    {
        $response = $gemini->ask("The user wants to see data. Please ask them to be more specific about which table and columns they are interested in, so you can provide detailed information.", []);
        $this->updateConversationHistory($question, $response);
        return $this->json(['response' => $response]);
    }

    private function getDatabaseSchema(): string
    {
        $tables = $this->doctrine->getConnection()->executeQuery("SHOW TABLES")->fetchAllAssociative();
        $schema = "Database Schema:\n\n";

        foreach ($tables as $table) {
            $tableName = reset($table);
            $schema .= "Table: $tableName\n";

            $columns = $this->doctrine->getConnection()->executeQuery("SHOW COLUMNS FROM $tableName")->fetchAllAssociative();
            foreach ($columns as $column) {
                $schema .= "  - " . $column['Field'] . " (" . $column['Type'] . ")";
                if ($column['Null'] === 'NO') {
                    $schema .= " NOT NULL";
                }
                if (!empty($column['Key'])) {
                    $schema .= " " . $column['Key'] . " KEY";
                }
                if ($column['Extra'] === 'auto_increment') {
                    $schema .= " AUTO_INCREMENT";
                }
                $schema .= "\n";
            }
            $schema .= "\n";
        }

        return $schema;
    }

    private function formatConversationHistory(): string
    {
        $history = "";
        foreach ($this->conversationHistory as $turn) {
            $history .= "User: " . $turn['user'] . "\n";
            $history .= "Assistant: " . $turn['assistant'] . "\n";
        }
        return $history;
    }

    private function updateConversationHistory(string $userMessage, string $assistantMessage): void
    {
        $this->conversationHistory[] = [
            'user' => $userMessage,
            'assistant' => $assistantMessage,
        ];
        if (count($this->conversationHistory) > 5) {
            array_shift($this->conversationHistory);
        }
    }

    private function handleUserJoinDate(string $question, GeminiService $gemini, string $userName): JsonResponse
    {
        $users = $gemini->fetchData('users', 'joining_date', 'name = ?', [$userName]);

        if ($users) {
            $joiningDate = $users[0]['joining_date'];
            $response = "The user '$userName' joined on " . $joiningDate . ".";
        } else {
            $response = "No user found with the name '$userName'.";
        }

        $this->updateConversationHistory($question, $response);
        return $this->json(['response' => $response]);
    }

    private function handleUserPhoneByEmail(string $question, GeminiService $gemini, string $userEmail): JsonResponse
    {
        $users = $gemini->fetchData('users', 'phone', 'email = ?', [$userEmail]);

        if ($users) {
            $phone = $users[0]['phone'];
            $response = "The phone number of $userEmail is " . $phone . ".";
        } else {
            $response = "No user found with the email '$userEmail'.";
        }

        $this->updateConversationHistory($question, $response);
        return $this->json(['response' => $response]);
    }

    public function fetchOne(string $sql, array $params = []): ?array
    {
        $statement = $this->connection->prepare($sql);
        $resultSet = $statement->executeQuery($params);
        $result = $resultSet->fetchAssociative();

        return $result ?: null;
    }

    public function fetchUsers(): array
    {
        $conn = $this->doctrine->getConnection();
        $sql = "SELECT * FROM users LIMIT 10";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAllAssociative();
        return $users;
    }



    #[Route('/urban-talk', name: 'urban_talk', methods: ['POST'])]
    public function chat(Request $request, GeminiService $gemini): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['question'])) {
            return $this->json(['response' => 'No question provided'], Response::HTTP_BAD_REQUEST);
        }

        $question = trim(strtolower($data['question']));

        try {
            if (str_contains($question, 'how many users')) {
                return $this->handleHowManyUsers($question, $gemini);
            }

            if (str_contains($question, 'roles in table users') || str_contains($question, 'roles in users table')) {
                return $this->handleUserRoles($question, $gemini);
            }

            if (str_contains($question, 'heni exist in users')) {
                return $this->handleHeniExists($question, $gemini);
            }

            if (str_contains($question, 'reservations')) {
                return $this->handleReservations($question, $gemini);
            }

            if (str_contains($question, 'taxis')) {
                return $this->handleTaxis($question, $gemini);
            }

            if (preg_match('/email of user with id (\d+)/i', $question, $matches)) {
                return $this->handleEmailOfUserId($question, $gemini, (int) $matches[1]); // Ensure ID is an integer
            }

            if (str_contains($question, 'add a user')) {
                return $this->handleAddUser($question, $gemini);
            }

            if (str_contains($question, 'show me data') || str_contains($question, 'display data') || str_contains($question, 'show all from') || str_contains($question, 'show users table')) {
                return $this->handleShowUsersData($gemini); // Use the dedicated handler
            }

            if (preg_match('/when did the user \'(.*?)\' join/i', $question, $matches)) {
                return $this->handleUserJoinDate($question, $gemini, $matches[1]);
            }

            if (preg_match('/what is the phone number of (.*?) in users table/i', $question, $matches)) {
                return $this->handleUserPhoneByEmail($question, $gemini, $matches[1]);
            }

            if (preg_match('/count rows of (.*?) table/i', $question, $matches)) {
                return $this->handleCountRows($question, $gemini, trim($matches[1]));
            }

            if (preg_match('/countRows in (.*?) table/i', $question, $matches)) {
                return $this->handleCountRows($question, $gemini, trim($matches[1]));
            }

            // If no specific handler is matched, use the general ask method with relevant data
            $relevantData = $gemini->retrieveRelevantData($question);
            $response     = $gemini->ask($this->buildContextualPrompt($question), $relevantData);
            $this->updateConversationHistory($question, $response);

            return $this->json(['response' => $response]);

        } catch (\Exception $e) {
            $errorMessage = 'Error processing your request: ' . $e->getMessage();
            $this->updateConversationHistory($question, $errorMessage);

            // Log the error for debugging
            $this->logger->error($errorMessage, [
                'question' => $question,
                'exception' => $e,
            ]);

            return $this->json(['response' => $errorMessage], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    private function handleShowUsersData(GeminiService $gemini): JsonResponse
    {
        try {
            $users = $gemini->fetchUsers();
            if (empty($users)) {
                return $this->json(['response' => 'No users found in the database.'], Response::HTTP_OK);
            }

            return $this->json([
                'columns' => array_keys($users[0] ?? []),
                'rows'    => $users,
            ]);
        } catch (\Exception $e) {
            $errorMessage = 'Error fetching user data: ' . $e->getMessage();
            $this->logger->error($errorMessage, [
                'exception' => $e,
            ]);
            return $this->json(['response' => $errorMessage], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }


    private function buildContextualPrompt(string $question): string
    {
            $prompt = <<<PROMPT
You are a database assistant for a non-technical administrator.
You have access to the following database schema:

{$this->getDatabaseSchema()}

Answer the following question about the database in a clear, concise, and direct way that a database administrator with no programming or SQL knowledge would understand. Focus on explaining what the data means and its characteristics.

If data is provided, use it to give a precise and accurate answer and provide detailed insights about the information presented. If no data is provided, answer based on the schema alone.

*Important:* Do not display raw data from the tables directly unless specifically asked. Instead, summarize or provide specific information based on the data and explain its meaning.

Avoid providing SQL queries unless explicitly asked.

Previous Conversation:
{$this->formatConversationHistory()}

Question: $question

PROMPT;
        return $prompt;
    }

}