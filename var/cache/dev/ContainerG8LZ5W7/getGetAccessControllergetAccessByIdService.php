<?php

namespace ContainerG8LZ5W7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetAccessControllergetAccessByIdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gjRRpgV.App\Controller\Api\Access\GetAccessController::getAccessById()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gjRRpgV.App\\Controller\\Api\\Access\\GetAccessController::getAccessById()'] = ($container->privates['.service_locator.gjRRpgV'] ?? $container->load('get_ServiceLocator_GjRRpgVService'))->withContext('App\\Controller\\Api\\Access\\GetAccessController::getAccessById()', $container);
    }
}
