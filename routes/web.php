<?php

use App\Http\Controllers\NewsController;
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
Route::delete('todo', 'TodoController@delete');
Route::patch('todo/{id}', 'TodoController@update');
Route::get('todo/showStatus', 'TodoController@showStatus');

//投稿アプリのルーティング
Route::get('news', 'NewsController@index')->name('news.index');
Route::group(['middleware' => 'auth'], function () {
    Route::get('news/create', 'NewsController@create')->name('news.create');
    Route::post('news/create', 'NewsController@store');
    Route::get('news/edit/{id}', 'NewsController@edit');
    Route::post('news/edit/{id}', 'NewsController@update');
    Route::post('news', 'NewsController@delete');

    //良いね機能
    Route::post('news/{post}/like', 'LikeController@store')->name('like');
    Route::post('news/{post}/unlike', 'LikeController@delete')->name('unlike');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
