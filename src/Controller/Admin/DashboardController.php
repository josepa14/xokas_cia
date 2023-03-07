<?php

namespace App\Controller\Admin;

use App\Entity\Eventos;
use App\Entity\Juegos;
use App\Entity\Mesas;
use App\Entity\Participacion;
use App\Entity\Reservas;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        
        if (in_array("ROLE_ADMIN",$this->getUser()->getRoles())) {
            return $this->render('admin/index.html.twig');
            }         
            return $this->redirect('/');

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Xokas Cia');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::linkToCrud('Crud Juegos', 'fas fa-list', Juegos::class);
        yield MenuItem::linkToCrud('Crud Usuarios', 'fas fa-list', User::class);
        yield MenuItem::linkToCrud('Crud Reservas', 'fas fa-list', Reservas::class);
        yield MenuItem::linkToCrud('Crud Mesas', 'fas fa-list', Mesas::class);
        yield MenuItem::linkToCrud('Crud Eventos', 'fas fa-list', Eventos::class);
        yield MenuItem::linkToCrud('Crud Participacion', 'fas fa-list', Participacion::class);
    }

}
