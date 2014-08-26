<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');
Route::get('todo', array('before' => 'auth', 'uses' => 'ToDoListController@showList'));
Route::resource('item','ItemController');
Route::post('user/login', 'UserController@login');
Route::resource('user','UserController');
Route::resource('tag','TagController');
