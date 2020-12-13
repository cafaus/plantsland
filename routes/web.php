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
Route::get('/gardener', function () {
    return view('gardenerList');
});
Route::get('/store', function () {
    return view('storeList');
});
Route::get('/store/plantname', function () {
    return view('plantDetail');
});

Route::get('/gardener/detail', function () {
    return view('gardenerDetail');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
