<?php

namespace ContainerS8y4101;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KKBrDvdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kKBrDvd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kKBrDvd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'section' => ['privates', '.errored..service_locator.kKBrDvd.App\\Entity\\Section', NULL, 'Cannot autowire service ".service_locator.kKBrDvd": it needs an instance of "App\\Entity\\Section" but this type has been excluded in "config/services.yaml".'],
        ], [
            'section' => 'App\\Entity\\Section',
        ]);
    }
}
