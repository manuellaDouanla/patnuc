<?php

namespace ContainerG8LZ5W7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateProjetsControllerpatchProjetService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZFE8q1P.App\Controller\Projets\UpdateProjetsController::patchProjet()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZFE8q1P.App\\Controller\\Projets\\UpdateProjetsController::patchProjet()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'projetsRepository' => ['privates', 'App\\Repository\\Projets\\ProjetsRepository', 'getProjetsRepositoryService', true],
            'usersRepository' => ['privates', 'App\\Repository\\Users\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'projetsRepository' => 'App\\Repository\\Projets\\ProjetsRepository',
            'usersRepository' => 'App\\Repository\\Users\\UsersRepository',
        ]))->withContext('App\\Controller\\Projets\\UpdateProjetsController::patchProjet()', $container);
    }
}
