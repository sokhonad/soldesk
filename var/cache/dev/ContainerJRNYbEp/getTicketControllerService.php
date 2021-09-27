<?php

namespace ContainerJRNYbEp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTicketControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TicketController' shared autowired service.
     *
     * @return \App\Controller\TicketController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TicketController.php';
        include_once \dirname(__DIR__, 4).'/src/Notifications/NouveauNotification.php';

        $container->services['App\\Controller\\TicketController'] = $instance = new \App\Controller\TicketController(new \App\Notifications\NouveauNotification(($container->services['swiftmailer.mailer.default'] ?? $container->load('getSwiftmailer_Mailer_DefaultService')), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService())));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\TicketController', $container));

        return $instance;
    }
}
