<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'get_list' => [[], ['_controller' => 'App\\Controller\\DrinkController::getList'], [], [['text', '/drinks']], [], [], []],
    'get_one' => [['id'], ['_controller' => 'App\\Controller\\DrinkController::getOne'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/drinks']], [], [], []],
    'post' => [['id'], ['_controller' => 'App\\Controller\\DrinkController::create'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/drinks']], [], [], []],
    'update' => [['id'], ['_controller' => 'App\\Controller\\DrinkController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/drinks']], [], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\DrinkController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/drinks']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];