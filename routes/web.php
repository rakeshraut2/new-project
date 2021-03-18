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

Route::get('/homepage','App\Http\controllers\UserController@index')->name('homepage');


Route::get('/about','App\Http\controllers\UserController@about')->name('about');


Route::get('/service','App\Http\controllers\UserController@service')->name('service');


Route::get('/portfolio','App\Http\controllers\UserController@portfolio')->name('portfolio');


Route::get('/team','App\Http\controllers\UserController@team')->name('team');


Route::get('/pricing','App\Http\controllers\UserController@pricing')->name('pricing');


Route::get('/contact','App\Http\controllers\UserController@contact')->name('contact');


