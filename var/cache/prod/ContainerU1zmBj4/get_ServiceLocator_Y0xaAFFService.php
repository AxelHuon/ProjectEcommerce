<?php

namespace ContainerU1zmBj4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y0xaAFFService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Y0xaAFF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Y0xaAFF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'addressRepository' => ['privates', 'App\\Repository\\AddressRepository', 'getAddressRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'orderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
        ], [
            'addressRepository' => 'App\\Repository\\AddressRepository',
            'entityManager' => '?',
            'orderRepository' => 'App\\Repository\\OrderRepository',
        ]);
    }
}
