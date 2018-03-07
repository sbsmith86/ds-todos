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

Route::get('/', function () {
    return redirect()->route('todo.index');
});
//Route::get('/{id}', function($id) {
//    return redirect()->route('todo.show');
//});
//Route::get('/hello', function ($id) {
//    return redirect()->route('todo.show', $id);
//});
Route::get('/test', 'TodoController@test');
Route::resource('todo', 'TodoController');