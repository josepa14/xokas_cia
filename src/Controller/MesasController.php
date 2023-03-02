<?php

namespace App\Controller;

use App\Entity\Mesas;

use App\Repository\MesasRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MesasController extends AbstractController
{
    #[Route('/mesas', name: 'app_mesas')]
    public function index(): Response
    {
        return $this->render('mesas/index.html.twig', [
            'controller_name' => 'MesasController',
        ]);
    }
    #[Route('/nuevamesa', methods: ['POST'])]
    public function createMesas(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        //parseo lo que llega por post
        $mesas = new Mesas();
        $mesas->setPosx($request->get('posx'));
        $mesas->setPosy($request->get('posy'));
        $mesas->setAlto($request->get('alto'));
        $mesas->setAncho($request->get('ancho'));

        $fecha = $request->get('fecha');
        $date = strtotime($fecha);
        $fechafinal = date('d-M-Y', $date);


        // $mesas->setFechaReservas($fechafinal); // me da fallo de mesas

        // tell Doctrine you want to (eventually) save the mesas (no queries yet)
        $entityManager->persist($mesas);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new mesas with id ' . $mesas->getId() . ' y de fecha ha llegado ' . $fecha);
        //return new Response($ejemplo."  ".$request->get('fecha'));
    }
    #[Route('/mostrarmesas', methods: ['GET'])]
    public function mostarMesas(MesasRepository $mesasRepository) :Response

    {
        $datos = $mesasRepository->findAll();
        foreach ($datos as $dato) {
            $data[] = [
                'id' => $dato->getId(),
                'posx' => $dato->getPosx(),
                'posy' => $dato->getPosy(),
                'alto' => $dato->getAlto(),
                'ancho' => $dato->getAncho(),
                'fecha_reserva' => $dato->getFechaReservas()
            ];
        }
        return $this->json($data);

    }
    
    #[Route('/editarmemsa', methods: ['POST'])]
    public function ModificarMesa(Request $request,MesasRepository $mesasRepository,ManagerRegistry $doctrine)  :Response
    {
        $mesaAeditar=$mesasRepository->find($request->get('id'));
        $mesaAeditar->setPosx($request->get('posy'));
        $mesaAeditar->setPosy($request->get('posx'));
        $mesaAeditar->setFechaReservas($request->get('fecha'));
    
        $entityManager = $doctrine->getManager();
        $entityManager->persist($mesaAeditar);
        $entityManager->flush();        
        return new Response("MESA EDITADA");

    }
}