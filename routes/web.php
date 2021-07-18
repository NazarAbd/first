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


Route::get('/details', function () {
    return view('pages/details');
});

Route::get('/create', function () {
    return view('pages/create');
});

Route::get('/edit', function () {
    return view('pages/edit');
});

Route::get('/','App\Http\Controllers\todosController@index');


Route::get('/app', 'App\Http\Controllers\MyController@index');
