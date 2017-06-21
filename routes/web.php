<?php

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

Route::get('/question/search/{query}',function($query)
{
	return \App\Question::search($query)->get();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/question/create','QuestionController@create');

Route::post('/question','QuestionController@store');

Route::get('/question/show','QuestionController@index');

Route::get('/question/{id}','ReplyController@create');

Route::post('/question/{question}/reply','ReplyController@store');

Route::get('/logout','HomeController@destroy');

Route::get('auth/{social}', 'Auth\LoginController@redirectToProvider');

Route::get('auth/{social}/callback', 'Auth\LoginController@handleProviderCallback');