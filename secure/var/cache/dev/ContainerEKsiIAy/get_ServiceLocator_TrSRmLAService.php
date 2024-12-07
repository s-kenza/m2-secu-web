<?php

namespace ContainerEKsiIAy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TrSRmLAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TrSRmLA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TrSRmLA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'salle' => ['privates', '.errored..service_locator.TrSRmLA.App\\Entity\\Salle', NULL, 'Cannot autowire service ".service_locator.TrSRmLA": it needs an instance of "App\\Entity\\Salle" but this type has been excluded in "config/services.yaml".'],
        ], [
            'salle' => 'App\\Entity\\Salle',
        ]);
    }
}
