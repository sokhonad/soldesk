<?php

namespace ContainerP4UjCid;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Dvp00sIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Dvp00sI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Dvp00sI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\TicketRepository', 'getTicketRepositoryService', true],
            'repoU' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\TicketRepository',
            'repoU' => 'App\\Repository\\UserRepository',
        ]);
    }
}
