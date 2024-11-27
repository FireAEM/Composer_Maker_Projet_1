<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index(): Response
    {
        $destinations = [
            ['id' => 1, 'name' => 'Paris', 'description' => 'La Ville Lumière', 'image' => 'paris.png'],
            ['id' => 2, 'name' => 'Tokyo', 'description' => 'La capitale du Japon', 'image' => 'tokyo.png'],
            // Ajoutez d'autres destinations ici
        ];

        return $this->render('index.html.twig', [
            'destinations' => $destinations,
        ]);
    }
}
