<?php

namespace ContainerU1zmBj4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultEntityManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->services['doctrine.orm.default_entity_manager'] = $container->createProxy('EntityManager_9a5be93', function () use ($container) {
                return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AttributeDriver([0 => (\dirname(__DIR__, 4).'/src/Entity')]), 'App\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity']);
        $a->setMetadataCache(new \Symfony\Component\Cache\Adapter\PhpArrayAdapter(($container->targetDir.''.'/doctrine/orm/default_metadata.php'), new \Symfony\Component\Cache\Adapter\ArrayAdapter()));
        $a->setQueryCacheImpl(\Doctrine\Common\Cache\Psr6\DoctrineProvider::wrap(($container->privates['doctrine.system_cache_pool'] ?? $container->load('getDoctrine_SystemCachePoolService'))));
        $a->setResultCacheImpl(\Doctrine\Common\Cache\Psr6\DoctrineProvider::wrap(($container->privates['doctrine.result_cache_pool'] ?? $container->load('getDoctrine_ResultCachePoolService'))));
        $a->setMetadataDriverImpl(new \Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver($b, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.ulid_generator' => ['privates', 'doctrine.ulid_generator', 'getDoctrine_UlidGeneratorService', true],
            'doctrine.uuid_generator' => ['privates', 'doctrine.uuid_generator', 'getDoctrine_UuidGeneratorService', true],
        ], [
            'doctrine.ulid_generator' => '?',
            'doctrine.uuid_generator' => '?',
        ])));
        $a->setProxyDir(($container->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($container));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Repository\\AddressRepository' => ['privates', 'App\\Repository\\AddressRepository', 'getAddressRepositoryService', true],
            'App\\Repository\\BrandRepository' => ['privates', 'App\\Repository\\BrandRepository', 'getBrandRepositoryService', true],
            'App\\Repository\\CategoriesRepository' => ['privates', 'App\\Repository\\CategoriesRepository', 'getCategoriesRepositoryService', true],
            'App\\Repository\\OrderItemRepository' => ['privates', 'App\\Repository\\OrderItemRepository', 'getOrderItemRepositoryService', true],
            'App\\Repository\\OrderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
            'App\\Repository\\ProductRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'App\\Repository\\ResetPasswordRequestRepository' => ['privates', 'App\\Repository\\ResetPasswordRequestRepository', 'getResetPasswordRequestRepositoryService', true],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'App\\Repository\\AddressRepository' => '?',
            'App\\Repository\\BrandRepository' => '?',
            'App\\Repository\\CategoriesRepository' => '?',
            'App\\Repository\\OrderItemRepository' => '?',
            'App\\Repository\\OrderRepository' => '?',
            'App\\Repository\\ProductRepository' => '?',
            'App\\Repository\\ResetPasswordRequestRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
        ])));

        $instance = \Doctrine\ORM\EntityManager::create(($container->services['doctrine.dbal.default_connection'] ?? $container->load('getDoctrine_Dbal_DefaultConnectionService')), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }
}