<?php
// src/Service/TextToSpeechService.php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class TextToSpeechService
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function synthesize(string $text): string
    {
        $text = trim($text);
        if ($text === '') {
            throw new \InvalidArgumentException('Text cannot be empty');
        }

        // Google TTS limits to ~200 chars per request
        if (mb_strlen($text) > 200) {
            $text = mb_substr($text, 0, 200);
        }

        $url = 'https://translate.google.com/translate_tts';
        $params = [
            'client' => 'tw-ob',
            'tl'     => 'en-US',
            'q'      => $text,
        ];

        // Google requires a browser User-Agent
        $response = $this->httpClient->request('GET', $url, [
            'query'   => $params,
            'headers' => [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
            ],
            'timeout' => 10,
        ]);

        if (200 !== $response->getStatusCode()) {
            throw new \RuntimeException('TTS request failed: HTTP '.$response->getStatusCode());
        }

        $contentType = $response->getHeaders()['content-type'][0] ?? '';
        if (strpos($contentType, 'audio/') !== 0) {
            throw new \RuntimeException('TTS returned wrong content-type: '.$contentType);
        }

        return $response->getContent();
    }
}
