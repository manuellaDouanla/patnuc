<?php

namespace Container1MFOORO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateUsersControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\Users\CreateUsers\CreateUsersController' shared autowired service.
     *
     * @return \App\Controller\Api\Users\CreateUsers\CreateUsersController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/Users/CreateUsers/CreateUsersController.php';

        $container->services['App\\Controller\\Api\\Users\\CreateUsers\\CreateUsersController'] = $instance = new \App\Controller\Api\Users\CreateUsers\CreateUsersController(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container)), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), ($container->privates['App\\Service\\LogService'] ?? $container->load('getLogServiceService')));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\Api\\Users\\CreateUsers\\CreateUsersController', $container));

        return $instance;
    }
}
