<?php

namespace Container0vYklfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddressRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\AddressRepository' shared autowired service.
     *
     * @return \App\Repository\AddressRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AddressRepository'] = new \App\Repository\AddressRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
