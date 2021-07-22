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

Route::get('/','App\Http\Controllers\ToDosController@index');
Route::get('edit/{todo}','App\Http\Controllers\ToDosController@edit');
Route::post('edit/{todo}','App\Http\Controllers\ToDosController@update');
Route::get('destroy/{todo}','App\Http\Controllers\ToDosController@destroy');
Route::get('details/{todo}','App\Http\Controllers\ToDosController@show');
Route::get('create','App\Http\Controllers\ToDosController@create');
Route::post('create','App\Http\Controllers\ToDosController@store');

Route::post('create','App\Http\Controllers\ToDosController@store');


Route::get('app', 'App\Http\Controllers\MyController@index');
