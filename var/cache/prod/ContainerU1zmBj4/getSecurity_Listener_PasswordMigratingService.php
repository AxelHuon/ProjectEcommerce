<?php

namespace ContainerU1zmBj4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_PasswordMigratingService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.password_migrating' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\PasswordMigratingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.listener.password_migrating'] = new \Symfony\Component\Security\Http\EventListener\PasswordMigratingListener(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')));
    }
}
