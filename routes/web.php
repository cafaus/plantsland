<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gardener', "GardenersController@index");
Route::get('/store', "PlantsController@index");
Route::get('/store/{plant}', "PlantsController@show");

Route::get('/gardener/{gardener}', "GardenersController@show");
Route::get('/cart', "PlantCartsController@index");
Route::post('/cart/{plant}', "PlantCartsController@store");

Route::get('/history', function() {
    return view('history');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
