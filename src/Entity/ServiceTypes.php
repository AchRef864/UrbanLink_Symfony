<?php

namespace App\Entity;

class ServiceTypes
{
    // Static function to return the services with IDs for both services and providers
    public static function getServicesMap(): array
    {
        return [
            'Oil Change' => [
                'id' => 1, // ID for the service
                'price' => 80,
                'providers' => [
                    ['id' => 1, 'name' => 'Garage El Amen'],
                    ['id' => 2, 'name' => 'Auto Service Tunis'],
                    ['id' => 3, 'name' => 'Garage Ben Salah']
                ]
            ],
            'Tire Replacement' => [
                'id' => 2, // ID for the service
                'price' => 100,
                'providers' => [
                    ['id' => 4, 'name' => 'Pneus Tunisie'],
                    ['id' => 5, 'name' => 'Auto Fast La Marsa'],
                    ['id' => 6, 'name' => 'Garage Express']
                ]
            ],
            'Brake Service' => [
                'id' => 3, // ID for the service
                'price' => 150,
                'providers' => [
                    ['id' => 7, 'name' => 'Garage Maher'],
                    ['id' => 8, 'name' => 'Tunis AutoTech'],
                    ['id' => 9, 'name' => 'CarFix']
                ]
            ],
            'Battery Replacement' => [
                'id' => 4, // ID for the service
                'price' => 200,
                'providers' => [
                    ['id' => 10, 'name' => 'Battery Center'],
                    ['id' => 11, 'name' => 'Garage El Hana'],
                    ['id' => 12, 'name' => 'Tunisia Auto Parts']
                ]
            ],
            'Full Inspection' => [
                'id' => 5, // ID for the service
                'price' => 250,
                'providers' => [
                    ['id' => 13, 'name' => 'Garage Pro'],
                    ['id' => 14, 'name' => 'AutoClean Menzah'],
                    ['id' => 15, 'name' => 'Garage Expert Rades']
                ]
            ],
            'Electronic Diagnostics' => [
                'id' => 6, // ID for the service
                'price' => 60,
                'providers' => [
                    ['id' => 16, 'name' => 'Diag Tunisie'],
                    ['id' => 17, 'name' => 'Garage Techno Car'],
                    ['id' => 18, 'name' => 'ElectronAuto']
                ]
            ],
            'AC Maintenance' => [
                'id' => 7, // ID for the service
                'price' => 90,
                'providers' => [
                    ['id' => 19, 'name' => 'Clim Auto Tunis'],
                    ['id' => 20, 'name' => 'Garage Rafik'],
                    ['id' => 21, 'name' => 'Tunisie Froid Auto']
                ]
            ],
            'Air Filter Cleaning' => [
                'id' => 8, // ID for the service
                'price' => 30,
                'providers' => [
                    ['id' => 22, 'name' => 'Garage Slim'],
                    ['id' => 23, 'name' => 'Rapido Auto'],
                    ['id' => 24, 'name' => 'Centre Auto Ikram']
                ]
            ],
            'Oil Filter Replacement' => [
                'id' => 9, // ID for the service
                'price' => 40,
                'providers' => [
                    ['id' => 25, 'name' => 'Garage El Amen'],
                    ['id' => 26, 'name' => 'Garage Maher'],
                    ['id' => 27, 'name' => 'Garage Express']
                ]
            ],
            'Pre-Tech Inspection' => [
                'id' => 10, // ID for the service
                'price' => 110,
                'providers' => [
                    ['id' => 28, 'name' => 'Tunisie Auto Prep'],
                    ['id' => 29, 'name' => 'Garage Mourad'],
                    ['id' => 30, 'name' => 'La Technique Auto']
                ]
            ]
        ];
    }
}
