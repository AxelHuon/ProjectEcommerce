<?php

namespace ContainerRBTxUxF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordRemoveExpiredCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Command/ResetPasswordRemoveExpiredCommand.php';

        $container->privates['SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand'] = $instance = new \SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand(($container->privates['symfonycasts.reset_password.cleaner'] ?? $container->load('getSymfonycasts_ResetPassword_CleanerService')));

        $instance->setName('reset-password:remove-expired');

        return $instance;
    }
}
