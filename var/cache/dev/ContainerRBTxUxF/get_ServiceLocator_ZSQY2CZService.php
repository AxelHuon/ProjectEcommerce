<?php

namespace ContainerRBTxUxF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZSQY2CZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZSQY2CZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZSQY2CZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'session' => ['privates', '.errored..service_locator.ZSQY2CZ.Symfony\\Component\\HttpFoundation\\Session\\Session', NULL, 'Cannot autowire service ".service_locator.ZSQY2CZ": it references class "Symfony\\Component\\HttpFoundation\\Session\\Session" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'productRepository' => 'App\\Repository\\ProductRepository',
            'session' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
        ]);
    }
}
