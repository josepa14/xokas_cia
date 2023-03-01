<?php

namespace App\Controller;

use App\Repository\JuegosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class Inicio extends AbstractController
{
    #[Route(path: '/', name: 'index')]
    public function login(JuegosRepository $jr): Response
    {
        return $this->render('index.html.twig', [
            'juegos' => $jr->findAll(),
        ]);
    }
    #[Route(path: '/index')]
    public function inicio(): Response
    {
        return $this->render('index.html.twig');
    }
}
