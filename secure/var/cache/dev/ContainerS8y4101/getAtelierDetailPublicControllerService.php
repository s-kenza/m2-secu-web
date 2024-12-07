<?php

namespace ContainerS8y4101;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAtelierDetailPublicControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AtelierDetailPublicController' shared autowired service.
     *
     * @return \App\Controller\AtelierDetailPublicController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AtelierDetailPublicController.php';

        $container->services['App\\Controller\\AtelierDetailPublicController'] = $instance = new \App\Controller\AtelierDetailPublicController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\AtelierDetailPublicController', $container));

        return $instance;
    }
}
