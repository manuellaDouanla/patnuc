<?php

namespace Container1MFOORO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetTachesControllergetTacheService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EZqD8Bz.App\Controller\Api\Taches\GetTachesController::getTache()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EZqD8Bz.App\\Controller\\Api\\Taches\\GetTachesController::getTache()'] = ($container->privates['.service_locator.EZqD8Bz'] ?? $container->load('get_ServiceLocator_EZqD8BzService'))->withContext('App\\Controller\\Api\\Taches\\GetTachesController::getTache()', $container);
    }
}
