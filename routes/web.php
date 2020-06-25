<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', ['as' => 'home', 'uses' => 'HomeController@showHome']);

// Park routes
Route::group(['prefix' => 'parks', 'as' => 'parks.'], function (Router $route) {
    $route->get('', ['as' => 'index', 'uses' => 'ParkController@index']);
    $route->get('{park}', ['as' => 'read', 'uses' => 'ParkController@read']);
    $route->get('{park}/edit', ['as' => 'edit', 'uses' => 'ParkController@edit']);
});

// Animal routes
Route::group(['prefix' => 'animals', 'as' => 'animals.'], function (Router $route) {
    $route->get('', ['as' => 'index', 'uses' => 'AnimalController@index']);
    $route->get('{animal}', ['as' => 'read', 'uses' => 'AnimalController@read']);
    $route->get('{animal}/edit', ['as' => 'edit', 'uses' => 'AnimalController@edit']);
});

// Plant routes
Route::group(['prefix' => 'plants', 'as' => 'plants.'], function (Router $route) {
    $route->get('', ['as' => 'index', 'uses' => 'PlantController@index']);
    $route->get('{plant}', ['as' => 'read', 'uses' => 'PlantController@read']);
    $route->get('{plant}/edit', ['as' => 'edit', 'uses' => 'PlantController@edit']);
});
