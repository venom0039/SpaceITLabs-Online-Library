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

Route::get('/books', 'App\Http\Controllers\BookController@index');
Route::get('/books/{id}', 'App\Http\Controllers\BookController@read');
Route::post('/books/create', 'App\Http\Controllers\BookController@create');
Route::put('/books/update/{id}', 'App\Http\Controllers\BookController@update');
Route::delete('/books/delete/{id}','App\Http\Controllers\BookController@delete');

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/register', 'App\Http\Controllers\AuthController@register');