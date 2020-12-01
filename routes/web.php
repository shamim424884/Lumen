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


$router->get('/', 'WelcomeController@index');

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('orders',  ['uses' => 'OrderController@showAllOrders']);
    $router->get('orders/{id}', ['uses' => 'OrderController@showOneOrder']);
    $router->post('orders', ['uses' => 'OrderController@create']);
    $router->delete('orders/{id}', ['uses' => 'OrderController@delete']);
    $router->put('orders/{id}', ['uses' => 'OrderController@update']);
});