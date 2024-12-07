<?php

namespace ContainerEKsiIAy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompetenceControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CompetenceController' shared autowired service.
     *
     * @return \App\Controller\CompetenceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CompetenceController.php';

        $container->services['App\\Controller\\CompetenceController'] = $instance = new \App\Controller\CompetenceController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\CompetenceController', $container));

        return $instance;
    }
}
