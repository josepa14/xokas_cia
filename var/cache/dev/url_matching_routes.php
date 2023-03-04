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
        '/editarmemsa' => [[['_route' => 'app_mesas_modificarmesa', '_controller' => 'App\\Controller\\MesasController::ModificarMesa'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservas' => [[['_route' => 'app_reservas', '_controller' => 'App\\Controller\\ReservasController::index'], null, null, null, false, false, null]],
        '/nuevaReserva' => [[['_route' => 'app_reservas_createreservas', '_controller' => 'App\\Controller\\ReservasController::createReservas'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/juegos/(?'
                    .'|([^/]++)(?'
                        .'|(*:64)'
                        .'|/edit(*:76)'
                        .'|(*:83)'
                    .')'
                    .'|mostrarJuegos/([^/]++)/([^/]++)(*:122)'
                .')'
                .'|/mostrar(?'
                    .'|mesas/([^/]++)(*:156)'
                    .'|reservas/([^/]++)/([^/]++)(*:190)'
                .')'
                .'|/reservasPersonales/([^/]++)(*:227)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'app_juegos_show', '_controller' => 'App\\Controller\\JuegosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'app_juegos_edit', '_controller' => 'App\\Controller\\JuegosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'app_juegos_delete', '_controller' => 'App\\Controller\\JuegosController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        122 => [[['_route' => 'app_juegos_mostrarreservas', '_controller' => 'App\\Controller\\JuegosController::mostrarReservas'], ['altura', 'anchura'], ['GET' => 0], null, false, true, null]],
        156 => [[['_route' => 'app_mesas_mostarmesas', '_controller' => 'App\\Controller\\MesasController::mostarMesas'], ['fecha'], ['GET' => 0], null, false, true, null]],
        190 => [[['_route' => 'app_reservas_mostrarreservas', '_controller' => 'App\\Controller\\ReservasController::mostrarReservas'], ['fecha', 'hora'], ['GET' => 0], null, false, true, null]],
        227 => [
            [['_route' => 'app_misreservas', '_controller' => 'App\\Controller\\ReservasController::mostrarReservasP'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
