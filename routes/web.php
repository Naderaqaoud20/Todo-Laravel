<?php

// Route::middleware('auth')->group(function () {
    Route::resource('/todo', 'App\Http\Controllers\TodoController');
    Route::put('/todos/{todo}/complete', 'App\Http\Controllers\TodoController@complete')->name('todo.complete');
    Route::delete('/todos/{todo}/incomplete', 'App\Http\Controllers\TodoController@incomplete')->name('todo.incomplete');
// });

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', 'App\Http\Controllers\UserController@index');

Route::post('/upload', 'App\Http\Controllers\UserController@uploadAvatar');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
