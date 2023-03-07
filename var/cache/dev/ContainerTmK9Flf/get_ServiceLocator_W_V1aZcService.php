<?php

namespace ContainerTmK9Flf;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W_V1aZcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.w.v1aZc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.w.v1aZc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservasRepository' => ['privates', 'App\\Repository\\ReservasRepository', 'getReservasRepositoryService', true],
        ], [
            'reservasRepository' => 'App\\Repository\\ReservasRepository',
        ]);
    }
}
