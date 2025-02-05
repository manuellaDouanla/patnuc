<?php

namespace ContainerG8LZ5W7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateRolesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\Roles\UpdateRolesController' shared autowired service.
     *
     * @return \App\Controller\Api\Roles\UpdateRolesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/Roles/UpdateRolesController.php';

        $container->services['App\\Controller\\Api\\Roles\\UpdateRolesController'] = $instance = new \App\Controller\Api\Roles\UpdateRolesController(($container->privates['App\\Service\\LogService'] ?? $container->load('getLogServiceService')));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\Api\\Roles\\UpdateRolesController', $container));

        return $instance;
    }
}
