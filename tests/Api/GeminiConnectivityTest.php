<?php
// tests/Api/GeminiConnectivityTest.php

namespace App\Tests\Api;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class GeminiConnectivityTest extends TestCase
{
    public function testApiEndpointIsReachable()
    {
        // Récupère la clé depuis l'env
        $apiKey = $_ENV['GEMINI_API_KEY'] ?? '';
        $this->assertNotEmpty($apiKey, 'La variable GEMINI_API_KEY doit être définie.');

        // Crée un client HTTP
        $client = HttpClient::create();

        try {
            // Envoi un "Hello" pour tester la connexion
            $response = $client->request(
                'POST',
                'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent',
                [
                    'query' => ['key' => $apiKey],
                    'json'  => [
                        'contents' => [[
                            'parts' => [[ 'text' => 'Hello' ]]
                        ]]
                    ]
                ]
            );

            $status = $response->getStatusCode();
            // On considère que si on a bien TOUTES les réponses 2xx à 4xx, l'endpoint est joignable
            $this->assertTrue(
                $status >= 200 && $status < 500,
                "L’API a répondu, mais avec un code inattendu : $status"
            );
        } catch (TransportExceptionInterface $e) {
            $this->fail('Impossible de joindre l’API Gemini : ' . $e->getMessage());
        }
    }
}
