<?php

namespace ContainerU1zmBj4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddAddressTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\AddAddressType' shared autowired service.
     *
     * @return \App\Form\AddAddressType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\AddAddressType'] = new \App\Form\AddAddressType();
    }
}
