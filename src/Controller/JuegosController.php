<?php

namespace App\Controller;

use App\Entity\Juegos;
use App\Form\JuegosType;
use App\Repository\JuegosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('juegos')]
class JuegosController extends AbstractController
{
    #[Route('/', name: 'app_juegos_index', methods: ['GET'])]
    public function index(JuegosRepository $juegosRepository): Response
    {
        return $this->render('juegos/index.html.twig', [
            'juegos' => $juegosRepository->findAll(),
        ]);
    }

    #[Route('/nuevo', name: 'app_juegos_new', methods: ['GET', 'POST'])]
    public function new(Request $request, JuegosRepository $juegosRepository): Response
    {
        $juego = new Juegos();
        $form = $this->createForm(JuegosType::class, $juego);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $juegosRepository->save($juego, true);

            return $this->redirectToRoute('app_juegos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('juegos/new.html.twig', [
            'juego' => $juego,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_juegos_show', methods: ['GET'])]
    public function show(Juegos $juego): Response
    {
        return $this->render('juegos/show.html.twig', [
            'juego' => $juego,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_juegos_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Juegos $juego, JuegosRepository $juegosRepository): Response
    {
        $form = $this->createForm(JuegosType::class, $juego);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $juegosRepository->save($juego, true);

            return $this->redirectToRoute('app_juegos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('juegos/edit.html.twig', [
            'juego' => $juego,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_juegos_delete', methods: ['POST'])]
    public function delete(Request $request, Juegos $juego, JuegosRepository $juegosRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$juego->getId(), $request->request->get('_token'))) {
            $juegosRepository->remove($juego, true);
        }

        return $this->redirectToRoute('app_juegos_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/mostrarJuegos/{altura}/{anchura}', methods: ['GET'])]
    public function mostrarReservas(JuegosRepository $jr, $altura,$anchura) :Response

    {
        $datos = $jr->findByExampleField($altura,$anchura);
        if (empty($datos)){return new Response("[]");}
        foreach ($datos as $dato) {
            $data[] = [
                'id' => $dato->getId(),
                'nombre' => $dato->getNombre(),
       
            ];
        }
        return $this->json($data);

    }
}
