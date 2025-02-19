<?php

namespace Container1MFOORO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateAccessControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\Access\CreateAccessController' shared autowired service.
     *
     * @return \App\Controller\Api\Access\CreateAccessController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/Access/CreateAccessController.php';

        $container->services['App\\Controller\\Api\\Access\\CreateAccessController'] = $instance = new \App\Controller\Api\Access\CreateAccessController(($container->privates['App\\Service\\LogService'] ?? $container->load('getLogServiceService')));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\Api\\Access\\CreateAccessController', $container));

        return $instance;
    }
}
