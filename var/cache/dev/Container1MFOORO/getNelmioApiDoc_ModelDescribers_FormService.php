<?php

namespace Container1MFOORO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_ModelDescribers_FormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.model_describers.form' shared service.
     *
     * @return \Nelmio\ApiDocBundle\ModelDescriber\FormModelDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/ModelDescriber/ModelDescriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Describer/ModelRegistryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Describer/ModelRegistryAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Util/SetsContextTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/ModelDescriber/FormModelDescriber.php';

        return $container->privates['nelmio_api_doc.model_describers.form'] = new \Nelmio\ApiDocBundle\ModelDescriber\FormModelDescriber(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), NULL, ['json'], false, true);
    }
}
