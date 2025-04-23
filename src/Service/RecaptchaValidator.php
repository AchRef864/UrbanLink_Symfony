<?php
// src/Service/RecaptchaValidator.php
namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class RecaptchaValidator
{
    public function __construct(
        private string $secretKey,
        private HttpClientInterface $httpClient
    ) {}

    public function verify(Request $request): bool
    {
        $recaptchaResponse = $request->request->get('g-recaptcha-response');

        if (empty($recaptchaResponse)) {
            return false;
        }

        try {
            $response = $this->httpClient->request(
                'POST',
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'body' => [
                        'secret' => $this->secretKey,
                        'response' => $recaptchaResponse,
                        'remoteip' => $request->getClientIp()
                    ]
                ]
            );

            $result = $response->toArray();
            return $result['success'] ?? false;
        } catch (\Exception $e) {
            return false;
        }
    }
}