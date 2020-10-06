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

Route::get('/', function(){
    return view('layouts.app');
});

Route::get('/books', 'BookController@index');
Route::post('/books','BookController@store');
Route::get('/books/create', 'BookController@create');
Route::put('/books/{id}', 'BookController@update');
Route::delete('/books/{id}', 'BookController@destroy');
Route::get('/books/{id}/edit', 'BookController@edit');
