<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    // show all movies 
    $router->get('movies',  ['uses' => 'MovieController@showAllMovies']);
    
    // show a movie
    $router->get('movies/{id}', ['uses' => 'MovieController@showMovie']);
    
    // store new movie
    $router->post('movies', ['uses' => 'MovieController@store']);
   
    // delete a movie
    $router->delete('movies/{id}', ['uses' => 'MovieController@delete']);
  
    // update a movie
    $router->put('movies/{id}', ['uses' => 'MovieController@update']);
    
    // sort movies
    $router->post('movies/sort',  ['uses' => 'MovieController@sortMovies']);
  });