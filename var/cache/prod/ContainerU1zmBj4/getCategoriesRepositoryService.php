<?php

namespace ContainerU1zmBj4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoriesRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CategoriesRepository' shared autowired service.
     *
     * @return \App\Repository\CategoriesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CategoriesRepository'] = new \App\Repository\CategoriesRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
