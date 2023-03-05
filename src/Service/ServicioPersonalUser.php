<?php
namespace App\Service;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
class ServicioPersonalUser

{
    private $user;
    private $mailer;
    private $p;
    private $repo;
    public function __construct(ManagerRegistry $user,UserPasswordHasherInterface $p,UserRepository $repo) //MailerInterface $mailer
    {
        $this->user = $user;
        //$this->mailer = $mailer;
        $this->p = $p;
        $this->repo = $repo;
    }
    public function modificar($email,): void //
    {   
       
        $usuario = $this->repo->findOneBySomeField($email);                  
        $usuario->setPassword(
            $this->p->hashPassword($usuario,"1234")
            //"1234"
        );
        $entityManager = $this->user->getManager();
        $entityManager->persist($usuario);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        
    //     $email = (new Email())
    //     ->from('jcasper2112@g.educaand.es')
    //     ->to("cp.josepablo@gmail.com")
    //     ->subject('PasswordRestablecida')
    //     ->text('Se ha cambiado la contraseña de: '.$pass);

    // $this->mailer->send($email);
    }
}

?>