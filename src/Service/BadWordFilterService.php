<?php
// src/Service/BadWordFilterService.php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class BadWordFilterService
{
    private HttpClientInterface $client;
    private string $endpoint;

    public function __construct(HttpClientInterface $client, string $endpoint = 'https://www.purgomalum.com/service/plain')
    {
        $this->client   = $client;
        $this->endpoint = $endpoint;
    }

    /**
     * Replace any “bad” words in $text with stars.
     */
    public function filter(string $text): string
    {
        $response = $this->client->request('GET', $this->endpoint, [
            'query' => [
                'text' => $text,
                // you can also customize 'fill_char' => '*'
            ],
        ]);

        if (200 !== $response->getStatusCode()) {
            // on error, just return original
            return $text;
        }

        // PurgoMalum returns the cleaned text as plain text
        return $response->getContent(false);
    }
}
