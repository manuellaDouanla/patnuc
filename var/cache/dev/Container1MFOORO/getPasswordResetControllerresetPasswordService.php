<?php

namespace Container1MFOORO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasswordResetControllerresetPasswordService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.S_leduv.App\Controller\Api\Users\PasswordReset\PasswordResetController::resetPassword()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.S_leduv.App\\Controller\\Api\\Users\\PasswordReset\\PasswordResetController::resetPassword()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'usersRepository' => ['privates', 'App\\Repository\\Users\\UsersRepository', 'getUsersRepositoryService', true],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'usersRepository' => 'App\\Repository\\Users\\UsersRepository',
            'passwordHasher' => '?',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\Api\\Users\\PasswordReset\\PasswordResetController::resetPassword()', $container);
    }
}
