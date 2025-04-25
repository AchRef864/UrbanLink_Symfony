<?php
namespace App\Service;

class OpenCageGeocoder
{
    private string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function reverseGeocode(string $lat, string $lon): string
    {
        $url = "https://api.opencagedata.com/geocode/v1/json?q={$lat}+{$lon}&key={$this->apiKey}&language=fr&no_annotations=1";

        $options = [
            'http' => [
                'method' => 'GET',
                'header' => "User-Agent: OpenCageSymfonyApp\r\n"
            ]
        ];

        $context = stream_context_create($options);
        $response = @file_get_contents($url, false, $context);

        if ($response === false) {
            return "Erreur géoloc";
        }

        $data = json_decode($response, true);

        if (!isset($data['results'][0]['components']) || empty($data['results'])) {
            return "Adresse inconnue";
        }

        $comp = $data['results'][0]['components'];
        $city = $comp['city'] ?? $comp['town'] ?? $comp['village'] ?? $comp['municipality'] ?? $comp['county'] ?? "Ville inconnue";
        $road = $comp['road'] ?? $comp['neighbourhood'] ?? $comp['suburb'] ?? "Lieu inconnu";

        return "{$city} - {$road}";
    }
}
