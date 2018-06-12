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

$router->get('/', function () use ($router) {
    return date("Y/m/d  h:i:sa");
});



$router->post('/login', [
    'as' => 'api.auth.login',
    'uses' => 'Auth\AuthController@postLogin',
]);

$router->group([
    'middleware' => ['jwt.auth','cors'],
], function ($api) {
    $api->get('/list', [
        'uses' => 'PostController@index',
        'as' => 'api.index'
    ]);

    $api->get('/list/{id}', [
        'uses' => 'PostController@show',
        'as' => 'api.show'
    ]);
});
