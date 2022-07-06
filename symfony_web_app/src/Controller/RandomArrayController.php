<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomArrayController extends AbstractController
{
    /**
     * @Route("/random")
     */
    public function index(): Response
    {
        // Generating random array.
        for ($i = 0; $i < 7; $i++) {
            $rndArray[$i] = rand(1, 1000);
        }
        // Developer Name.
        $name = "Fahri Vardar";

        // Sending the variables to the specified twig template and rendering the pages.
        return $this->render('random_array/index.html.twig', [
            'random_array' => $rndArray,
            'name' => $name,
        ]);
    }
}
