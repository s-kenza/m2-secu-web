<?php

namespace ContainerEKsiIAy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O38UodMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O38UodM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O38UodM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'atelier' => ['privates', '.errored..service_locator.O38UodM.App\\Entity\\Atelier', NULL, 'Cannot autowire service ".service_locator.O38UodM": it needs an instance of "App\\Entity\\Atelier" but this type has been excluded in "config/services.yaml".'],
        ], [
            'atelier' => 'App\\Entity\\Atelier',
        ]);
    }
}
