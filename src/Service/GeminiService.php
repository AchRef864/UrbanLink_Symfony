<?php

namespace App\Service;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeminiService
{
    private HttpClientInterface $client;
    private string $apiKey;
    private ManagerRegistry $doctrine;

    public function __construct(HttpClientInterface $client, string $apiKey, ManagerRegistry $doctrine)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
        $this->doctrine = $doctrine;
    }

    public function ask(string $question, array $data = []): string
    {
        $schema = $this->getDatabaseContext();

        $prompt = $this->buildPrompt($question, $schema, $data);

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

        $data = $response->toArray();
        return $data['candidates'][0]['content']['parts'][0]['text']
            ?? "Sorry, I couldn't process that request.";
    }

    private function buildPrompt(string $question, string $schema, array $data = []): string
    {
        $prompt = <<<PROMPT
You are a database assistant for a non-technical administrator. 
You have access to the following database schema:

$schema

Answer the following question about the database in a clear, concise, and direct way that a database administrator with no programming or SQL knowledge would understand.

If data is provided, use it to give a precise and accurate answer.  If no data is provided, answer based on the schema alone.

Avoid providing SQL queries unless explicitly asked.

Question: $question

PROMPT;

        if (!empty($data)) {
            $prompt .= "\n\nData:\n" . json_encode($data, JSON_PRETTY_PRINT);
        }

        return $prompt;
    }

    private function getDatabaseContext(): string
    {
        $tables = $this->doctrine->getConnection()->executeQuery("SHOW TABLES")->fetchAll();
        $schema = "Database Schema:\n\n";

        foreach ($tables as $table) {
            $tableName = reset($table);
            $schema .= "Table: $tableName\n";

            $columns = $this->doctrine->getConnection()->executeQuery("SHOW COLUMNS FROM $tableName")->fetchAll();
            foreach ($columns as $column) {
                $schema .= "  - " . $column['Field'] . " (" . $column['Type'] . ")\n";
            }
            $schema .= "\n";
        }

        return $schema;
    }

    // Generic function to fetch data - use with caution and proper sanitization
    public function fetchData(string $tableName, string $select = '*', string $where = null, array $params = []): array
    {
        $conn = $this->doctrine->getConnection();
        $sql = "SELECT $select FROM $tableName";

        if ($where) {
            $sql .= " WHERE $where";
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchAllAssociative();
    }

    public function countRows(string $tableName, string $where = null, array $params = []): int
    {
        $conn = $this->doctrine->getConnection();
        $sql = "SELECT COUNT(*) FROM $tableName";

        if ($where) {
            $sql .= " WHERE $where";
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        return (int) $stmt->fetchOne();
    }
}