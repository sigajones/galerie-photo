<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RandomImageController extends AbstractController
{
    #[Route('/random/image', name: 'app_random_image')]
    public function index(): Response
    {
        $image = [];

        for ($i = 0; $i < 9; $i++) {
            $image[] = 'https://picsum.photos/300/200?random=' . $i;
        }
        return $this->render('random_image/index.html.twig', [
            'images' => $image,
        ]);
    }
}
