<?php


namespace App\Notifications;


// On importe les classes nécessaires à l'envoi d'e-mail et à Twig
use App\Entity\User;
use Swift_Mailer;
use Swift_Message;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class NouveauNotification
{
    /**
     * Propriété contenant le module d'envoi de mail
     *
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * Propriété contenant l'environnement twig
     *
     * @var Environment
     */
    private $renderer;

    /**
     * Constructeur de classe
     * @param Swift_Mailer $mailer
     * @param Environment $renderer
     */
    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }

    /**
     * Méthode de notification (envoi de mail)
     *
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function notify(User $user)
    {
        // On construit le mail
        $message = (new Swift_Message('Mon Blog - Nouvelle inscription'))
            // Expéditeur
            ->setFrom('diakarousokhonacp@gmail.com')
            // Destinataire
            ->setTo($user->getEmail())
            // Corps du message (créé avec twig)
            ->setBody(
                $this->renderer->render(
                    'emails/ajout_statut.html.twig'
                ),
                'text/html'
            );

        // On envoie le mail
        $this->mailer->send($message);
    }
}