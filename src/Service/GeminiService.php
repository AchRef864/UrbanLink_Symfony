<?php
// src/Service/GeminiService.php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class GeminiService
{
    private HttpClientInterface $client;
    private string $apiKey;
    private string $model;
    private string $baseUri;

    public function __construct(HttpClientInterface $client, string $apiKey, string $model)
    {
        $this->client  = $client;
        $this->apiKey  = $apiKey;
        $this->model   = $model;
        $this->baseUri = 'https://generativelanguage.googleapis.com/v1beta/models/';
    }

    public function getChatResponse(string $message): string
    {
        $url = $this->baseUri . $this->model . ':generateContent?key=' . $this->apiKey;
    
        $payload = [
            'contents' => [[
                'role' => 'user',
                'parts' => [['text' => $message]],
            ]],
        ];
    
        try {
            $response = $this->client->request('POST', $url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'json' => $payload,
            ]);
        } catch (TransportExceptionInterface $e) {
            return 'Erreur de transport : ' . $e->getMessage();
        }
    
        $status = $response->getStatusCode();
        $body   = $response->getContent(false);
    
        if (200 !== $status) {
            return sprintf("Erreur API %d : %s", $status, $body);
        }
    
        $data = $response->toArray(false);
    
        $candidates = $data['candidates'] ?? [];
        if (isset($candidates[0]['content']['parts'][0]['text'])) {
            return $candidates[0]['content']['parts'][0]['text'];
        }
    
        return 'Aucune réponse valide reçue.';
    }
}
