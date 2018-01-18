<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/version', function () use ($router) {
    return $router->app->version();
});

// TaskListController
$router->get('/', 'TaskListController@dashboard');

// TaskController
$router->get('/task/delete/{id}', 'TaskController@delete');
$router->get('/task/check/{id}', 'TaskController@check');
$router->post('/task/new', 'TaskController@create');

$router->get('/task', 'TaskController@index');
$router->get('/task/search', 'TaskController@search');

// todo: route naming? uitzoeken