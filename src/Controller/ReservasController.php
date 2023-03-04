<?php

namespace App\Controller;

use App\Entity\Reservas;
use App\Repository\ReservasRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservasController extends AbstractController
{
    #[Route('/reservas',name: 'app_reservas')]
    public function index(): Response
    {
        return $this->render('reservas/index.html.twig', [
            'controller_name' => 'ReservasController',
        ]);
    }
    #[Route('/mostrarreservas/{fecha}/{hora}', methods: ['GET'])]
    public function mostrarReservas(ReservasRepository $reservasRepository, $fecha,$hora) :Response

    {
        $datos = $reservasRepository->findByExampleField($fecha,$hora);
        if (empty($datos)){return new Response("[]");}
        foreach ($datos as $dato) {
            $data[] = [
                'id' => $dato->getId(),
                'fecha' => $dato->getFecha(),
                'hora' => $dato->getHora(),
                'idMesa' => $dato->getNumMesa(),
                'idJuego' => $dato->getNumJuego(),
                'idJugador' => $dato->getNumUser()
            ];
        }
        return $this->json($data);

    }
    #[Route('/nuevaReserva', methods: ['POST'])]
    public function createReservas(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        //parseo lo que llega por post
        $reservas = new Reservas();
        $reservas->setFecha($request->get('fecha'));
        $reservas->setHora($request->get('hora'));
        $reservas->setNumMesa($request->get('idMesa'));
        $reservas->setNumJuego($request->get('idJuego'));
        $reservas->setNumUser($request->get('idUser'));
    
        $entityManager->persist($reservas);

        $entityManager->flush();

        return new Response('Saved new reserva with id ' . $reservas->getId());
    }
    #[Route('/reservasPersonales/{id}', methods: ['GET'],name: 'app_misreservas')]
    public function mostrarReservasP(ReservasRepository $reservasRepository, $id) :Response

    {
        $datos = $reservasRepository->findByUser($id);
        if (empty($datos)){return new Response("[]");}
        foreach ($datos as $dato) {
            $data[] = [
                'id' => $dato->getId(),
                'fecha' => $dato->getFecha(),
                'hora' => $dato->getHora(),
                'idMesa' => $dato->getNumMesa(),
                'idJuego' => $dato->getNumJuego(),
                'idJugador' => $dato->getNumUser()
            ];
        }
        return $this->json($data);

    }
}
