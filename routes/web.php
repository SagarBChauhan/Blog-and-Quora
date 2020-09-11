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

Route::get('/layout', function () {
    return view('layout');
});
Route::get('/login', 'App\Http\Controllers\QuestionController@login');
Route::get('/register', 'App\Http\Controllers\QuestionController@register');
Route::get('/registerStore', '\App\Http\Controllers\PagesController@registerStore');

Route::get('/covid19', 'App\Http\Controllers\QuestionController@viewCovid19');
Route::get('/indoChina', 'App\Http\Controllers\QuestionController@viewindoChina');
Route::get('/IT', 'App\Http\Controllers\QuestionController@viewIT');
Route::get('/politics', 'App\Http\Controllers\QuestionController@viewpolitics');
Route::get('/spacetech', 'App\Http\Controllers\QuestionController@viewspacetech');
Route::get('/store', 'App\Http\Controllers\QuestionController@store');
