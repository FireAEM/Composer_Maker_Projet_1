<?php
// src/Controller/DestinationController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DestinationController extends AbstractController
{
    public function show(int $id): Response
    {
        $destinations = [
            1 => [
                'name' => 'Paris', 
                'description' => 'La Ville Lumière', 
                'activities' => 'Musées, monuments, balades en bateau', 
                'points_of_interest' => 'Tour Eiffel, Louvre',
                'coordinates' => ['lat' => 48.8566, 'lng' => 2.3522],
                'images' => []
            ],
            2 => [
                'name' => 'Tokyo', 
                'description' => 'La capitale du Japon', 
                'activities' => 'Visites de temples, shopping, cuisine japonaise', 
                'points_of_interest' => 'Temple Senso-ji, Tour de Tokyo, Shibuya Crossing',
                'coordinates' => ['lat' => 35.6762, 'lng' => 139.6503],
                'images' => [
                    ['src' => 'path/to/tokyo1.jpg', 'alt' => 'Image du temple Senso-ji'],
                    ['src' => 'path/to/tokyo2.jpg', 'alt' => 'Image de la Tour de Tokyo']
                ]
            ],
        ];

        $destination = $destinations[$id] ?? null;

        if (!$destination) {
            throw $this->createNotFoundException('La destination n\'existe pas');
        }

        return $this->render('show.html.twig', [
            'destination' => $destination,
        ]);
    }
}
