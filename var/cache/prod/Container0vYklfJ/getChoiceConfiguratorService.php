<?php

namespace Container0vYklfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChoiceConfiguratorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ChoiceConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ChoiceConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ChoiceConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ChoiceConfigurator(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
