<?php

use Illuminate\Support\Facades\Route;
use App\Models\todolist;
use App\Http\Controllers\TodolistController;

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

Route::get('/','App\Http\Controllers\TodolistController@index');
Route::get('create','App\Http\Controllers\TodolistController@create');
Route::get('save_new_list','App\Http\Controllers\TodolistController@store');
Route::get('delete/{id}','App\Http\Controllers\TodolistController@destroy');
Route::get('edit/{id}','App\Http\Controllers\TodolistController@edit');
Route::get('update_list/{id}','App\Http\Controllers\TodolistController@update');


