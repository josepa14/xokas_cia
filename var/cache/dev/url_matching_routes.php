<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\Inicio::login'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_inicio_inicio', '_controller' => 'App\\Controller\\Inicio::inicio'], null, null, null, false, false, null]],
        '/juegos' => [[['_route' => 'app_juegos_index', '_controller' => 'App\\Controller\\JuegosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/juegos/nuevo' => [[['_route' => 'app_juegos_new', '_controller' => 'App\\Controller\\JuegosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginUserController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginUserController::logout'], null, null, null, false, false, null]],
        '/mesas' => [[['_route' => 'app_mesas', '_controller' => 'App\\Controller\\MesasController::index'], null, null, null, false, false, null]],
        '/nuevamesa' => [[['_route' => 'app_mesas_createmesas', '_controller' => 'App\\Controller\\MesasController::createMesas'], null, ['POST' => 0], null, false, false, null]],
        '/mostrarmesas' => [[['_route' => 'app_mesas_mostarmesas', '_controller' => 'App\\Controller\\MesasController::mostarMesas'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservas' => [[['_route' => 'app_reservas', '_controller' => 'App\\Controller\\ReservasController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/juegos/([^/]++)(?'
                    .'|(*:61)'
                    .'|/edit(*:73)'
                    .'|(*:80)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        61 => [[['_route' => 'app_juegos_show', '_controller' => 'App\\Controller\\JuegosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        73 => [[['_route' => 'app_juegos_edit', '_controller' => 'App\\Controller\\JuegosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        80 => [
            [['_route' => 'app_juegos_delete', '_controller' => 'App\\Controller\\JuegosController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
