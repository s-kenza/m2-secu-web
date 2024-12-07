<?php

namespace ContainerEKsiIAy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TLju07mService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tLju07m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tLju07m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'inscriptionRepository' => ['privates', 'App\\Repository\\InscriptionRepository', 'getInscriptionRepositoryService', true],
        ], [
            'inscriptionRepository' => 'App\\Repository\\InscriptionRepository',
        ]);
    }
}