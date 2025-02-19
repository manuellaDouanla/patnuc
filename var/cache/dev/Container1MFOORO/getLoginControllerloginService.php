<?php

namespace Container1MFOORO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginControllerloginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.w2c5uqp.App\Controller\Api\Users\Login\LoginController::login()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.w2c5uqp.App\\Controller\\Api\\Users\\Login\\LoginController::login()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'usersRepository' => ['privates', 'App\\Repository\\Users\\UsersRepository', 'getUsersRepositoryService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'passwordHasher' => '?',
            'usersRepository' => 'App\\Repository\\Users\\UsersRepository',
            'mailer' => '?',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\Api\\Users\\Login\\LoginController::login()', $container);
    }
}
