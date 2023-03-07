<?php
namespace App\Service;
use App\Entity\Participacion;
use App\Entity\User;
use App\Repository\EventosRepository;
use App\Repository\ParticipacionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Mime\Part\File;
class ServicioInvitacionUsuarios

{
    private $user;
    private $mailer;
    private $evento;
    private $repo;
    private $participacion;

    public function __construct(ManagerRegistry $user,EventosRepository $evento,UserRepository $repo,MailerInterface $mailer,ParticipacionRepository $partipacion) //MailerInterface $mailer
    {
        $this->user = $user;
        $this->mailer = $mailer;
        $this->evento = $evento;
        $this->repo = $repo;
        $this->participacion = $partipacion;
    }
    public function mandarCorreoEvento($idEvento,): void //
    {   
       
        $event = $this->evento->find($idEvento);                 
       //recojo el evento
       $eventoid = $event->getId();
       //creo el pdf
       //recojo todos los usuarios
       $usuariosInvitados = $this->repo->findAll();
       //recorro todos los usuarios cojo la id y en el mismo bucle que cojo el ID mando correo
       foreach ($usuariosInvitados as $dato) {
            $userId = $dato->getId();
            $html = '
            <html>
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Confirmacion</title>
            </head>
            <body>
            <h2>Tienes una invitacion a un evento</h2>
            <p>Hola '.$dato->getUsername().' se te ha invitado al evento de '.$event->getNombre().'</p>
            <dl>
            <p>pulsa <a href="http://localhost:8000/aceptarInvitacion/'.$eventoid.'/'.$userId.'"> AQUI </a> para aceptar la invitacion</p>
            
            </body>
            </html>';
            $options = new Options();
            $options->set('defaultFont', 'Roboto');
            $mipdf = new Dompdf($options);
            $mipdf->set_paper("A4", "portrait");
            $mipdf->load_html($html); //aqui puede entrar un .html
            $mipdf->render();
            $pdf = $mipdf->output();
            $filename = "Invitacion a evento.pdf";
            file_put_contents($filename, $pdf);

        $emailUser = $dato->getEmail();
        $emailer = (new Email())
        ->from('jcasper2112@g.educaand.es')
        ->to($emailUser)//aqui va el repo->getEmail()
        ->subject('Invitacion a evento')
        ->text("Hola te hemos invitado al siguiente evento")//aqui va el pdf generado
        ->embedFromPath('Invitacion a evento.pdf','Invitacion a evento.pdf');

        $this->mailer->send($emailer);
       }
   
    


       
    }
    public function anadirUsuarioEvento($idEvento,$idUser): Response{
        //llamo repo participacion
        $participacion= new Participacion();
        $participacion->setEvento($idEvento);
        $participacion->setUsuario($idUser);
        $entityManager = $this->user->getManager();
        $entityManager->persist($participacion);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        return new Response("INVITACION ACEPTADA CORRECTAMENTE");
       
    }
    public function mostrarEventosPersonales($idUser) 
    {
        
       $participaciones = $this->participacion->findByExampleField($idUser);
    return $participaciones;
        

    }
}

?>