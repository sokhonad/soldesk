<?php

namespace App\Controller\Admin;

use App\Entity\Affectation;
use App\Entity\Categorie;
use App\Entity\Ticket;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
                //return parent::index();
                $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
                $url = $routeBuilder->setController(CategorieCrudController::class)->generateUrl();
                return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gestion  admin');
    }

    public function configureMenuItems(): iterable
    {
         //yield MenuItem::linktoDashboard('Dashboard', 'home');
         yield MenuItem::linktoRoute('Accueil', 'fas fa-home', 'admin');
         yield MenuItem::linkToCrud('Categorie', 'fas fa-list', Categorie::class);
         yield MenuItem::linkToCrud('Clients', 'fas fa-list', Affectation::class);
         yield MenuItem::linkToCrud('Ticket', 'fas fa-list', Ticket::class);
         yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-list', User::class);

    }
}
