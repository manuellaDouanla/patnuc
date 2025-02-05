<?php

namespace Container1MFOORO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBulkMailControllersendBulkEmailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0ISJ3L0.App\Controller\Api\Users\BulkMailController::sendBulkEmail()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0ISJ3L0.App\\Controller\\Api\\Users\\BulkMailController::sendBulkEmail()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'mailService' => ['privates', 'App\\Service\\MailService', 'getMailServiceService', true],
        ], [
            'mailService' => 'App\\Service\\MailService',
        ]))->withContext('App\\Controller\\Api\\Users\\BulkMailController::sendBulkEmail()', $container);
    }
}
