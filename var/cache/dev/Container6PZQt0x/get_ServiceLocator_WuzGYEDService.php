<?php

namespace Container6PZQt0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WuzGYEDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WuzGYED' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WuzGYED'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\JuegosCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\JuegosCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\JuegosCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\JuegosCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\JuegosCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\JuegosCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\JuegosCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\JuegosCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\JuegosCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\JuegosCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\JuegosCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\JuegosCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\JuegosCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\JuegosCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Inicio::login' => ['privates', '.service_locator.t5YIzLW', 'get_ServiceLocator_T5YIzLWService', true],
            'App\\Controller\\JuegosController::delete' => ['privates', '.service_locator.Cod3346', 'get_ServiceLocator_Cod3346Service', true],
            'App\\Controller\\JuegosController::edit' => ['privates', '.service_locator.Cod3346', 'get_ServiceLocator_Cod3346Service', true],
            'App\\Controller\\JuegosController::index' => ['privates', '.service_locator.1y1Lq0j', 'get_ServiceLocator_1y1Lq0jService', true],
            'App\\Controller\\JuegosController::new' => ['privates', '.service_locator.1y1Lq0j', 'get_ServiceLocator_1y1Lq0jService', true],
            'App\\Controller\\JuegosController::show' => ['privates', '.service_locator.o2_PJA6', 'get_ServiceLocator_O2PJA6Service', true],
            'App\\Controller\\LoginUserController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\MesasController::createMesas' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\MesasController::mostarMesas' => ['privates', '.service_locator.jf9HDug', 'get_ServiceLocator_Jf9HDugService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.xVV8u.q', 'get_ServiceLocator_XVV8u_QService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\JuegosCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\JuegosCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\JuegosCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\JuegosCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\JuegosCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\JuegosCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\JuegosCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\JuegosCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\JuegosCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\JuegosCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\JuegosCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\JuegosCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\JuegosCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\JuegosCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\JuegosCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Inicio:login' => ['privates', '.service_locator.t5YIzLW', 'get_ServiceLocator_T5YIzLWService', true],
            'App\\Controller\\JuegosController:delete' => ['privates', '.service_locator.Cod3346', 'get_ServiceLocator_Cod3346Service', true],
            'App\\Controller\\JuegosController:edit' => ['privates', '.service_locator.Cod3346', 'get_ServiceLocator_Cod3346Service', true],
            'App\\Controller\\JuegosController:index' => ['privates', '.service_locator.1y1Lq0j', 'get_ServiceLocator_1y1Lq0jService', true],
            'App\\Controller\\JuegosController:new' => ['privates', '.service_locator.1y1Lq0j', 'get_ServiceLocator_1y1Lq0jService', true],
            'App\\Controller\\JuegosController:show' => ['privates', '.service_locator.o2_PJA6', 'get_ServiceLocator_O2PJA6Service', true],
            'App\\Controller\\LoginUserController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\MesasController:createMesas' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\MesasController:mostarMesas' => ['privates', '.service_locator.jf9HDug', 'get_ServiceLocator_Jf9HDugService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.xVV8u.q', 'get_ServiceLocator_XVV8u_QService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::delete' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::detail' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::edit' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::index' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::new' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\JuegosCrudController::updateEntity' => '?',
            'App\\Controller\\Inicio::login' => '?',
            'App\\Controller\\JuegosController::delete' => '?',
            'App\\Controller\\JuegosController::edit' => '?',
            'App\\Controller\\JuegosController::index' => '?',
            'App\\Controller\\JuegosController::new' => '?',
            'App\\Controller\\JuegosController::show' => '?',
            'App\\Controller\\LoginUserController::login' => '?',
            'App\\Controller\\MesasController::createMesas' => '?',
            'App\\Controller\\MesasController::mostarMesas' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:delete' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:detail' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:edit' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:index' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:new' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\JuegosCrudController:updateEntity' => '?',
            'App\\Controller\\Inicio:login' => '?',
            'App\\Controller\\JuegosController:delete' => '?',
            'App\\Controller\\JuegosController:edit' => '?',
            'App\\Controller\\JuegosController:index' => '?',
            'App\\Controller\\JuegosController:new' => '?',
            'App\\Controller\\JuegosController:show' => '?',
            'App\\Controller\\LoginUserController:login' => '?',
            'App\\Controller\\MesasController:createMesas' => '?',
            'App\\Controller\\MesasController:mostarMesas' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}