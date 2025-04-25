<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Doctrine\DBAL\Connection;

class GeminiService
{
    public function __construct(
        private HttpClientInterface $client,
        private string $apiKey,
        private Connection $connection
    ) {}

    public function ask(string $question): string
    {
        $schema = $this->getDatabaseContext();

        $response = $this->client->request(
            'POST',
            'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent',
            [
                'query' => ['key' => $this->apiKey],
                'json' => [
                    'contents' => [[
                        'parts' => [[
                            'text' => "You're a database admin assistant. Current schema:\n$schema\n\nAnswer this query about the data:\n$question"
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

    private function getDatabaseContext(): string
    {
        try {
            $tables = $this->connection->executeQuery('SHOW TABLES')->fetchAllAssociative();

            $schema = "Database tables:\n";
            foreach ($tables as $table) {
                $tableName = current($table);
                $schema .= "- $tableName\n";
            }

            return $schema;

        } catch (\Exception $e) {
            return "Available tables: users, vehicles, trips, subscriptions (local cache)";
        }
    }
}
