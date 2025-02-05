<?php

namespace ContainerG8LZ5W7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListUsersControllerGetUsersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EbGcv8Z.App\Controller\Api\Users\ListUsers\ListUsersController::GetUsers()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EbGcv8Z.App\\Controller\\Api\\Users\\ListUsers\\ListUsersController::GetUsers()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userRepository' => ['privates', 'App\\Repository\\Users\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'userRepository' => 'App\\Repository\\Users\\UsersRepository',
        ]))->withContext('App\\Controller\\Api\\Users\\ListUsers\\ListUsersController::GetUsers()', $container);
    }
}
