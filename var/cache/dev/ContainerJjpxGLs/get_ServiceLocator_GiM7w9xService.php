<?php

namespace ContainerJjpxGLs;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GiM7w9xService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.giM7w9x' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.giM7w9x'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'siu' => ['privates', 'App\\Service\\ServicioInvitacionUsuarios', 'getServicioInvitacionUsuariosService', true],
        ], [
            'siu' => 'App\\Service\\ServicioInvitacionUsuarios',
        ]);
    }
}