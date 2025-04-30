<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class TextToSpeechService
{
    private string $apiKey;
    private HttpClientInterface $httpClient;

    public function __construct(string $apiKey, HttpClientInterface $httpClient)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = $httpClient;
    }

    public function synthesize(string $text): string
    {
        if (empty($text)) {
            throw new \InvalidArgumentException('Text cannot be empty');
        }

        // Truncate text if it's too long (Voice RSS has limitations)
        if (strlen($text) > 2000) {
            $text = substr($text, 0, 2000);
        }

        $params = [
            'key' => $this->apiKey,
            'hl' => 'en-us',
            'src' => $text,
            'c' => 'MP3',
            'f' => '44khz_16bit_stereo'
        ];

        $url = 'https://api.voicerss.org/';

        try {
            // Log request details (for debugging)
            error_log('DEBUG TTS: Sending request to Voice RSS API');
            error_log('DEBUG TTS: API Key = ' . substr($this->apiKey, 0, 5) . '...');
            error_log('DEBUG TTS: Text length = ' . strlen($text));
            error_log('DEBUG TTS: Text sample = "' . substr($text, 0, 50) . '..."');
            
            // Make POST request instead of GET to handle longer texts properly
            $response = $this->httpClient->request('POST', $url, [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'body' => http_build_query($params),
                'timeout' => 30, // Increased timeout
            ]);
            
            // Get response status code
            $statusCode = $response->getStatusCode();
            error_log('DEBUG TTS: Response Status = ' . $statusCode);
            
            // Get response headers for debugging
            $headers = $response->getHeaders();
            error_log('DEBUG TTS: Response Headers = ' . json_encode($headers));
            
            if ($statusCode !== 200) {
                throw new \RuntimeException('Voice RSS API returned status code: ' . $statusCode);
            }
            
            // Get content type
            $contentType = $headers['content-type'][0] ?? 'unknown';
            error_log('DEBUG TTS: Response Content-Type = ' . $contentType);
            
            // Get response content and check it
            $content = $response->getContent(false);
            error_log('DEBUG TTS: Response Content Length = ' . strlen($content));
            
            // Check first few bytes to see if it looks like an MP3
            if (strlen($content) > 10) {
                $firstBytes = bin2hex(substr($content, 0, 10));
                error_log('DEBUG TTS: First bytes = ' . $firstBytes);
                
                // ID3 header for MP3 starts with "ID3" (hex: 494433)
                // MPEG frames often start with 0xFF 0xFB
                $isMP3 = (strpos($firstBytes, '494433') === 0) || (strpos($firstBytes, 'fffb') !== false);
                error_log('DEBUG TTS: Appears to be MP3? ' . ($isMP3 ? 'Yes' : 'No'));
                
                // If content doesn't look like MP3 and is plain text, it might be an error message
                if (!$isMP3 && (strpos($contentType, 'text/') === 0 || strlen($content) < 1000)) {
                    // Try to show the content if it's text
                    $textContent = substr($content, 0, 500);
                    error_log('DEBUG TTS: Content appears to be text: ' . $textContent);
                    throw new \RuntimeException('API returned text instead of audio: ' . $textContent);
                }
            }
            
            // Force the content type to audio/mpeg
            return $content;
            
        } catch (\Exception $e) {
            error_log('DEBUG TTS Exception: ' . $e->getMessage());
            error_log('DEBUG TTS Exception trace: ' . $e->getTraceAsString());
            throw new \RuntimeException('Text-to-Speech conversion failed: ' . $e->getMessage(), 0, $e);
        }
    }
}