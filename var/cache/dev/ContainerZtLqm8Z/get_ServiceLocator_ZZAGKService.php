<?php

namespace ContainerZtLqm8Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZZAGKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zZ_aG_K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zZ_aG_K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.zZ_aG_K.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.zZ_aG_K": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'em' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
