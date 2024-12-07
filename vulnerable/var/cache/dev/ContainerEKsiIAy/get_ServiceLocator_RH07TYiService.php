<?php

namespace ContainerEKsiIAy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RH07TYiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RH07TYi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RH07TYi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'section' => ['privates', '.errored..service_locator.RH07TYi.App\\Entity\\Section', NULL, 'Cannot autowire service ".service_locator.RH07TYi": it needs an instance of "App\\Entity\\Section" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'section' => 'App\\Entity\\Section',
        ]);
    }
}