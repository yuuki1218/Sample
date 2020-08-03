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

Route::get('login', 'LoginController@loginShow');
Route::get('register', 'LoginController@registerShow');
Route::match(['get', 'post'], 'register', 'LoginController@register');
Route::get('home', 'LoginController@homeShow');
Route::get('sample', 'TodoController@show');
Route::post('sample', 'TodoController@add');
