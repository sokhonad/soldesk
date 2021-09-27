<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Form\TicketType;
use App\Notifications\NouveauNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TicketController extends AbstractController
{
    private  $notify_creation;

    /**
     * RegistrationController constructor.
     * @param NouveauNotification $notify_creation
     */
    public function __construct(NouveauNotification $notify_creation)
    {
        $this->notify_creation = $notify_creation;
    }


    #[Route('user/ticket', name: 'cree_ticket')]
    #[Route('/user/ticket/{id}/modiffication', name: 'cree_modification')]

    public function form(Ticket $ticket = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (!$ticket) {
            $ticket = new Ticket();
        }
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $ticket->setUser($this->getUser());
            $ticket->setDate(new \DateTime('now'));
            $ticket->setCreateur($this->getUser()->getNom());
            $this->notify_creation->notify($this->getUser());
            $this->getDoctrine()->getManager()->persist($ticket);
            $entityManager->persist($ticket);
            $entityManager->flush();
            return $this->redirectToRoute('user');
        }

        return $this->render('ticket/formulaire.html.twig', [
            'form' => $form->createView(),
            'textBoutton' => $ticket->getId() !== null,
        ]);
    }
    #[Route('user/ticket/{id}', name: 'cree_ticket_u')]
    public function formSolway(Ticket $ticket = null, Request $request,$id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (!$ticket) {
            $ticket = new Ticket();
        }
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $ticket->setUser($id());
            $ticket->setDate(new \DateTime('now'));
            $ticket->setCreateur($this->getUser()->getNom());
            $this->getDoctrine()->getManager()->persist($ticket);
            $entityManager->persist($ticket);
            $entityManager->flush();
            return $this->redirectToRoute('user');
        }
        return $this->render('ticket/formulaire.html.twig', [
            'form' => $form->createView(),
            'textBoutton' => $ticket->getId() !== null,
        ]);
    }

    #[Route('user/ticket/{id}/suppression', name: 'delete')]
    public function delete($id): Response
    {
        $athlete = $this->getDoctrine()
            ->getRepository(Ticket::class)
            ->find($id);
        if (!$athlete) {
            throw $this->createNotFoundException(
                ' ticket  id ' . $id . " n'existe pas."
            );
        } else {
            $em = $this->getDoctrine()->getManager();
            $em->remove($athlete);
            $em->flush();
            return new Response('ticket  id ' . $id . ' a ete supprimer');
        }
    }
}
