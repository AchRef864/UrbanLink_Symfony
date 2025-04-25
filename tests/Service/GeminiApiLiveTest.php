<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Doctrine\DBAL\Connection;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;

class GeminiService
{
    public function __construct(
        private HttpClientInterface $client,
        private string             $apiKey,
        private string             $modelName,
        private Connection         $connection
    ) {}

    public function ask(string $question): string
    {
        $schema = $this->getDatabaseContext();
        $url    = sprintf(
            'https://generativelanguage.googleapis.com/v1beta/models/%s:generateContent',
            $this->modelName
        );

        try {
            $response = $this->client->request('POST', $url, [
                'query' => ['key' => $this->apiKey],
                'json'  => [
                    'contents' => [[
                        'parts' => [[
                            'text' => "You're a database admin assistant. Current schema:\n$schema\n\nAnswer:\n$question"
                        ]]
                    ]],
                    'safetySettings' => [
                        ['category' => 'HARM_CATEGORY_DANGEROUS_CONTENT', 'threshold' => 'BLOCK_NONE']
                    ]
                ]
            ]);

            $data = $response->toArray(false);
            return $data['candidates'][0]['content']['parts'][0]['text']
                ?? "Empty response from API.";

        } catch (ClientExceptionInterface $e) {
            // 404 ou 401, etc.
            if (404 === $e->getResponse()->getStatusCode()) {
                return "Modèle « {$this->modelName} » introuvable (404). Vérifiez GEMINI_MODEL.";
            }
            return "Erreur API ({$e->getResponse()->getStatusCode()}): " . $e->getMessage();
        } catch (\Exception $e) {
            return "Erreur inattendue : " . $e->getMessage();
        }
    }

    private function getDatabaseContext(): string
    {
        try {
            $tables = $this->connection
                ->executeQuery('SHOW TABLES')
                ->fetchAllAssociative();

            $schema = "Database tables:\n";
            foreach ($tables as $t) {
                $schema .= "- " . current($t) . "\n";
            }
            return $schema;
        } catch (\Exception) {
            return "Available tables: users, vehicles, trips, subscriptions (local cache)";
        }
    }
}
