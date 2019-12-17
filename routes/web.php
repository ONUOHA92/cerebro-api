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
use App\User;

$router->get('/' , function () use ($router) {
    return $router->app->version();
});

//Users (Business & IT Personnel)
$router->group(['prefix' => 'api'], function () use ($router) {

  $router->post('register', 'AuthController@register');
 $router->post('login', 'AuthController@login');
 $router->get('profile', 'UserController@profile');

   $router->get('users/',  ['uses' => 'UserController@showAllUsers']);
   $router->post('users/', ['uses' => 'UserController@create']);
   $router->get('users/{id}', ['uses' => 'UserController@showOneUser']);
   $router->put('users/{id}', ['uses' => 'UserController@update']);
   $router->delete('users/{id}', ['uses' => 'UserController@delete']);

  });