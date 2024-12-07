<?php

namespace ContainerEKsiIAy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SRz0nt4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SRz0nt4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SRz0nt4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'secteur' => ['privates', '.errored..service_locator.SRz0nt4.App\\Entity\\Secteur', NULL, 'Cannot autowire service ".service_locator.SRz0nt4": it needs an instance of "App\\Entity\\Secteur" but this type has been excluded in "config/services.yaml".'],
        ], [
            'secteur' => 'App\\Entity\\Secteur',
        ]);
    }
}
