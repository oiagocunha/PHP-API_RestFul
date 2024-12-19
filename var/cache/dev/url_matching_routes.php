<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/drinks' => [[['_route' => 'get_list', '_controller' => 'App\\Controller\\DrinkController::getList'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/drinks/([^/]++)(?'
                    .'|(*:26)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:62)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [
            [['_route' => 'get_one', '_controller' => 'App\\Controller\\DrinkController::getOne'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'post', '_controller' => 'App\\Controller\\DrinkController::create'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'update', '_controller' => 'App\\Controller\\DrinkController::update'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'delete', '_controller' => 'App\\Controller\\DrinkController::remove'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        62 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
