<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default_index')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [

        ]);
    }

    #[Route('/sayMyName/{name}', name: 'default_sayMyName', requirements: ['name' => '\w+'])]
    public function sayMyName($name): Response
    {
        return $this->render('default/sayMyName.html.twig', [
            'name' => $name
        ]);
    }
}
