<?php

namespace Container1MFOORO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteAccessControllerdeleteAccessByIdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rDOPgG4.App\Controller\Api\Access\DeleteAccessController::deleteAccessById()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rDOPgG4.App\\Controller\\Api\\Access\\DeleteAccessController::deleteAccessById()'] = ($container->privates['.service_locator.rDOPgG4'] ?? $container->load('get_ServiceLocator_RDOPgG4Service'))->withContext('App\\Controller\\Api\\Access\\DeleteAccessController::deleteAccessById()', $container);
    }
}
