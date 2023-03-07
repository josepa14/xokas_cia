<?php

namespace ContainerJjpxGLs;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_219vIKaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.219vIKa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.219vIKa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eventosR' => ['privates', 'App\\Repository\\EventosRepository', 'getEventosRepositoryService', true],
            'siu' => ['privates', 'App\\Service\\ServicioInvitacionUsuarios', 'getServicioInvitacionUsuariosService', true],
        ], [
            'eventosR' => 'App\\Repository\\EventosRepository',
            'siu' => 'App\\Service\\ServicioInvitacionUsuarios',
        ]);
    }
}
