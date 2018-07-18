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
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('dogs', ['uses' => 'DogController@showAlldogs']);
    $router->get('dogs/{id}', ['uses' => 'DogController@showOneDog']);
    $router->post('dogs', ['uses' => 'DogController@create']);
    $router->put('dogs/{id}', ['uses' => 'DogController@update']);
    $router->delete('dogs/{id}', ['uses' => 'DogController@delete']);

    $router->get('cats', ['uses' => 'CatController@showAllcats']);
    $router->get('cats/{id}', ['uses' => 'CatController@showOneCat']);
    $router->post('cats', ['uses' => 'CatController@create']);
    $router->put('cats/{id}', ['uses' => 'CatController@update']);
    $router->delete('cats/{id}', ['uses' => 'CatController@delete']);
});
