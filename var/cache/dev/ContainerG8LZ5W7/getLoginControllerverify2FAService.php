<?php

namespace ContainerG8LZ5W7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginControllerverify2FAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..ByJPfl.App\Controller\Api\Users\Login\LoginController::verify2FA()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..ByJPfl.App\\Controller\\Api\\Users\\Login\\LoginController::verify2FA()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'usersRepository' => ['privates', 'App\\Repository\\Users\\UsersRepository', 'getUsersRepositoryService', true],
            'jwtManager' => ['services', 'lexik_jwt_authentication.jwt_manager', 'getLexikJwtAuthentication_JwtManagerService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'usersRepository' => 'App\\Repository\\Users\\UsersRepository',
            'jwtManager' => '?',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\Api\\Users\\Login\\LoginController::verify2FA()', $container);
    }
}
