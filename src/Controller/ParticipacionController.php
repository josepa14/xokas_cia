<?php

namespace App\Controller;

use App\Repository\EventosRepository;
use App\Service\ServicioInvitacionUsuarios;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParticipacionController extends AbstractController
{
    #[Route('/eventos', name: 'app_eventos')]
    public function index(EventosRepository $eventos): Response
    {
        return $this->render('participacion/index.html.twig', [
            'eventos' => $eventos->findAll(),
        ]);
    }
    #[Route('/invitarEvento/{id}',name: 'app_invitacion', methods: ['GET'])]//FALTA EL GET
    public function invitacion(Request $request,ServicioInvitacionUsuarios $siu): Response
    {
        $siu->mandarCorreoEvento($request->get("id"));
       return $this->redirectToRoute('index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/aceptarInvitacion/{idE}/{idU}', methods: ['GET'])]//FALTA EL POST
        public function AceptarInvitacion(Request $request,ServicioInvitacionUsuarios $siu,$idE,$idU): Response
    {
       return $siu->anadirUsuarioEvento($idE,$idU);
    }
    #[Route('/misEventos/{idU}',name: 'mis_eventos', methods: ['GET'])]//FALTA EL POST
        public function verEventos(ServicioInvitacionUsuarios $siu,$idU): Response
    {
       return $this->render('participacion/participaciones.html.twig', [
            'eventos' => $siu->mostrarEventosPersonales($idU),
       ]);
       
    }
}
