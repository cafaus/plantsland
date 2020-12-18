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
// harus login
Route::middleware(['auth'])->group( function () { 
    // role admin/member
    Route::middleware(['role:admin|member'])->group( function(){
        
    });
    // role member
    Route::middleware(['role:member'])->group( function(){
        Route::get('/cart', "PlantCartsController@index");

        Route::post('/plantCart/{plant}', "PlantCartsController@store");
        Route::delete('/plantCart/{plantCart}', 'PlantCartsController@destroy');
        Route::patch('/plantCart/{plantCart}', 'PlantCartsController@update');

        Route::post('/gardenerCart/{gardenerCart}', "GardenerCartsController@store");
        Route::delete('/gardenerCart/{gardenerCart}', 'GardenerCartsController@destroy');
        Route::patch('/gardenerCart/{gardenerCart}', 'GardenerCartsController@update');
    });
    //role admin
    Route::middleware(['role:admin'])->group( function(){
        
    });
} );

Route::get('/gardener', "GardenersController@index");
Route::get('/store', "PlantsController@index");
Route::get('/store/{plant}', "PlantsController@show");
Route::get('/gardener/{gardener}', "GardenersController@show");






Route::get('/history', function() {
    return view('history');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
