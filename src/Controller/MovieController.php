<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    #[Route('/movie', name: 'movie_index')]
    public function index(EntityManagerInterface $manager): Response
    {
        $movies = $manager->getRepository(Movie::class)->findAll();

        return $this->render('movie/index.html.twig', [
            'movies' => $movies
        ]);
    }

    #[Route('/movie/{id}', name: 'movie_show')]
    public function show($id, EntityManagerInterface $manager): Response
    {
        $movie = $manager->getRepository(Movie::class)->find($id);

        if (!$movie) {
            throw $this->createNotFoundException('The movie does not exist');
        }

        return $this->render('movie/show.html.twig', [
            'movie' => $movie
        ]);
    }
}
