<?php

namespace ContainerG8LZ5W7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListModuleControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Modules\ListModuleController' shared autowired service.
     *
     * @return \App\Controller\Modules\ListModuleController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Modules/ListModuleController.php';

        $container->services['App\\Controller\\Modules\\ListModuleController'] = $instance = new \App\Controller\Modules\ListModuleController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['App\\Repository\\Modules\\ModulesRepository'] ?? $container->load('getModulesRepositoryService')), ($container->privates['App\\Repository\\Access\\AccessRepository'] ?? $container->load('getAccessRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\Modules\\ListModuleController', $container));

        return $instance;
    }
}
