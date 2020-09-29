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
// Statics Pages
Route::get('/', 'StaticPageController@index')->name('static-page.home');
Route::get('/form', 'StaticPageController@form')->name('static-page.form');