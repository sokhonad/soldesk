<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\TicketRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(TicketRepository $repo): Response
    {
        $tickets = $repo->findByExampleField($this->getUser()->getId());
        return $this->render('user/index.html.twig', array(
            'tickets' => $tickets
        ));
    }
    #[Route('/user/consulter/{id}', name: 'user_id')]
    public function index_consultee(TicketRepository $repo,$id): Response
    {
        $tickets = $repo->find($id);
        dump($tickets);
        return $this->render('user/index_consulte.html.twig', array(
            'tickets' => $tickets
        ));
    }
    #[Route('/user/delete/{id}', name: 'delete_id')]
    public function delete(TicketRepository $repo,$id): Response
    {
        $tickets = $repo->find($id);
        dump($tickets);
        return $this->render('user/index_consulte.html.twig', array(
            'tickets' => $tickets
        ));
    }
    #[Route('/test/{nom}', name: 'usere')]
    public function index1(TicketRepository $repo,UserRepository $userRepository,$nom)
    {
/*        $tickets = $repo->findByExampleFieldNom($nom);
        var_dump($tickets);*/
        $tickets = $userRepository->findByExampleField($nom);
        /*return $this->render('user/index.html.twig', array(
            'tickets' => $tickets
        ));*/
    }
    #[Route('user/solway/', name: 'solway')]
    public function admistateur(TicketRepository $repo,User $user = null, Request $request,UserRepository $repoU): Response
    {
        $tickets = $repo->findAll();
        if (!$user) {
            $user = new User();
        }
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->persist($user);
            //accees  email
            $a=$form->get('nom')->getData();
            $id = $repoU->findOneBySomeField($a)->getId();
            $ticket=$repo->findByExampleField($id);
            dump($id);
            return $this->render('ticket/ticket.html.twig', array(
                'tickets' => $ticket,'form' => $form->createView()
            ));
        }
        return $this->render('ticket/tickets.html.twig', array(
            'tickets' => $tickets,'form' => $form->createView()
        ));
    }
    #[Route('/solway/utilisateurs', name: 'liste_user')]
    public function listeDeUser(UserRepository $repo): Response
    {
        $users = $repo->findAll();

        return $this->render('user/listeuser.html.twig', array(
            'users' => $users
        ));
    }


}
