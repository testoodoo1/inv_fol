<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('role',['middleware' => 'Role:editor','uses' => 'TestController@index']);

Route::get('todo',['uses' => 'TodoController@index']);
Route::get('insert',['uses' => 'TodoController@insert']);
Route::get('list',['uses' => 'TodoController@todo_list']);

