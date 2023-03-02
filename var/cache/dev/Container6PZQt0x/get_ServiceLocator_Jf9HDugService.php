<?php

namespace Container6PZQt0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jf9HDugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jf9HDug' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jf9HDug'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mesasRepository' => ['privates', 'App\\Repository\\MesasRepository', 'getMesasRepositoryService', true],
        ], [
            'mesasRepository' => 'App\\Repository\\MesasRepository',
        ]);
    }
}
