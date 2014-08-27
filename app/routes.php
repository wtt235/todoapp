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
Route::post('item/add_update', 'ItemController@store');
Route::post('item/delete/{id}', 'ItemController@destroy');
Route::get('item/{id}', 'ItemController@show');
Route::post('user/login', 'UserController@login');
Route::get('user/create', 'UserController@create');
Route::post('user/create', 'UserController@store');
