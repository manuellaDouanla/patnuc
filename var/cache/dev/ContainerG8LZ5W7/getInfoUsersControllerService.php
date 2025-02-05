<?php

namespace ContainerG8LZ5W7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInfoUsersControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\Users\InfoUsers\InfoUsersController' shared autowired service.
     *
     * @return \App\Controller\Api\Users\InfoUsers\InfoUsersController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/Users/InfoUsers/InfoUsersController.php';

        $container->services['App\\Controller\\Api\\Users\\InfoUsers\\InfoUsersController'] = $instance = new \App\Controller\Api\Users\InfoUsers\InfoUsersController(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['App\\Service\\LogService'] ?? $container->load('getLogServiceService')));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\Api\\Users\\InfoUsers\\InfoUsersController', $container));

        return $instance;
    }
}
