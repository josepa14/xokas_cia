<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\Inicio::login'], [], [['text', '/']], [], [], []],
    'app_juegos_index' => [[], ['_controller' => 'App\\Controller\\JuegosController::index'], [], [['text', '/juegos/']], [], [], []],
    'app_juegos_new' => [[], ['_controller' => 'App\\Controller\\JuegosController::new'], [], [['text', '/juegos/nuevo']], [], [], []],
    'app_juegos_show' => [['id'], ['_controller' => 'App\\Controller\\JuegosController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/juegos']], [], [], []],
    'app_juegos_edit' => [['id'], ['_controller' => 'App\\Controller\\JuegosController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/juegos']], [], [], []],
    'app_juegos_delete' => [['id'], ['_controller' => 'App\\Controller\\JuegosController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/juegos']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginUserController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginUserController::logout'], [], [['text', '/logout']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
];