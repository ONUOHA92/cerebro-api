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



 //$router->get('/user', function () use ($router) {

    //return "All Done";
//});

$router->get('/' , function () use ($router) {
    return $router->app->version();
});

//Users (Business & IT Personnel)
$router->group(['prefix' => 'api'], function () use ($router) {

   $router->get('users/',  ['uses' => 'UserController@showAllUsers']);
   $router->post('users/', ['uses' => 'UserController@create']);
   $router->get('users/{id}', ['uses' => 'UserController@showOneUser']);
   $router->put('users/{id}', ['uses' => 'UserController@update']);

  //  // THIS IS THE ROUTE FOR THE PROFILE
  //  $router->get('users/profile',  ['uses' => 'UserController@showAllUsers']);
  //  $router->get('users/profile/{id}', ['uses' => 'UserController@showOneUser']);
   
  //  //THIS IS THE ROUTE FOR THE SIGN IN
  //  $router->post('users/sign-up', ['uses' => 'UserController@create']);
  //  $router->post('users/', ['uses' => 'UserController@create']);

  //  // login Route
  //  $router->get('users/login',  ['uses' => 'UserController@showAllUsers']);
  //  $router->get('users/login/{id}', ['uses' => 'UserController@showOneUser']);

   //setting update Route
 
   
    
   
    
    

    $router->put('users/{id}', ['uses' => 'UserController@update']);
    //Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
    $router->delete('users/{id}', ['uses' => 'UserController@delete']);
  });



// view profile

 $router->group(['prefix' => 'api'], function () use ($router) {

  // $router->get('users/profile',  ['uses' => 'UserController@showAllUsers']);

 //  $router->post('users/sign-up', ['uses' => 'UserController@create']);
    
  //  $router->get('users/{id}', ['uses' => 'UserController@showOneUser']);

//     $router->put('users/{id}', ['uses' => 'UserController@update']);
//     Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
  });

 //Api registration
  $router->group(['prefix' => 'api'], function () use ($router) {
    // Matches "/api/register
    $router->post('register', 'AuthController@register');
 
 });



 // API route group
$router->group(['prefix' => 'api'], function () use ($router) {
  // Matches "/api/register
 $router->post('register', 'AuthController@register');

   // Matches "/api/login
  $router->post('login', 'AuthController@login');
});

  


  // API route group
  $router->group(['prefix' => 'api'], function () use ($router) {
      // Matches "/api/register
     $router->post('register', 'AuthController@register');
       // Matches "/api/login
      $router->post('login', 'AuthController@login');
  
      // Matches "/api/profile
      $router->get('profile', 'UserController@profile');
  
      // Matches "/api/users/1 
      //get one user by id
      $router->get('users/{id}', 'UserController@singleUser');
  
      // Matches "/api/users
      $router->get('users', 'UserController@allUsers');
  });

//   Program (Onsite worker)
// $router->group(['prefix' => 'api'], function () use ($router) {

//     $router->get('users',  ['uses' => 'UserController@showAllUsers']);
   
//     $router->put('users/{id}', ['uses' => 'UserController@update']);
//     //Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
//   });


//   Program (Design & Development)
// $router->group(['prefix' => 'api'], function () use ($router) {

//     $router->get('users',  ['uses' => 'UserController@showAllUsers']);
   
//     $router->put('users/{id}', ['uses' => 'UserController@update']);
//     //Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
//   });


//   Program (System maintenance)
// $router->group(['prefix' => 'api'], function () use ($router) {

//     $router->get('users',  ['uses' => 'UserController@showAllUsers']);
   
//     $router->put('users/{id}', ['uses' => 'UserController@update']);
//     //Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
//   });



//  $router->get('user/{$id}', function($id) {
//      return User::findOrFail($id);
//  });
 
