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

//ログイン画面・新規登録画面のルーティング
Route::get('login', 'LoginController@loginIndex');
Route::get('register', 'LoginController@registerIndex');
Route::post('register', 'LoginController@register');
Route::get('home', 'LoginController@homeShow');

//TODOリストのルーティング
Route::get('todo', 'TodoController@index');
Route::post('todo', 'TodoController@add');
Route::post('todo/delete', 'TodoController@delete');
Route::patch('todo/update/{id}', 'TodoController@update');
Route::get('todo/showStatus', 'TodoController@showStatus');
