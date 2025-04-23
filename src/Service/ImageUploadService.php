<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploadService
{
    private $httpClient;
    private $apiKey = 'fb1e61ca9f3d6f9f04f0d9fb798ade38';  // Replace with your actual ImgBB API key
    private $uploadUrl = 'https://api.imgbb.com/1/upload';  // ImgBB API endpoint
    private $baseUrl = 'https://i.ibb.co/';  // Base URL for ImgBB images

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function uploadImage(UploadedFile $file): ?string
    {
        try {
            $imagePath = $file->getRealPath();
            $imageName = $file->getClientOriginalName();

            // Log the upload start
            error_log("Starting image upload process for: " . $imagePath);

            if (!file_exists($imagePath)) {
                error_log("Image file not found: " . $imagePath);
                throw new \Exception('Image file not found: ' . $imagePath);
            }

            // Prepare data for the ImgBB upload API
            $data = [
                'key' => $this->apiKey,
                'image' => base64_encode(file_get_contents($imagePath)) // Base64 encode the image
            ];

            // Make request to ImgBB API
            $response = $this->httpClient->request('POST', $this->uploadUrl, [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'body' => $data,
            ]);

            $statusCode = $response->getStatusCode();
            error_log("ImgBB API response status: " . $statusCode);

            if ($statusCode !== 200) {
                $content = $response->getContent(false);  // Avoid exception
                error_log("Upload failed: " . $content);
                throw new \Exception("Upload failed: HTTP $statusCode");
            }

            $data = $response->toArray();

            // Check if the URL is returned
            if (isset($data['data']['url'])) {
                $imageUrl = $data['data']['url'];
                error_log("Upload successful: " . $imageUrl);
                return $imageUrl;
            }

            error_log("Upload failed: No 'url' returned in response");
            throw new \Exception('Upload failed: No image URL returned by ImgBB.');
        } catch (\Exception $e) {
            error_log("Exception during upload: " . $e->getMessage());
            throw new \Exception('Upload error: ' . $e->getMessage());
        }
    }
}
