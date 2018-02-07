<?php

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

Route::get('/create', 'AccountController@create');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/data-items', 'DataItemController@index');

/* Create new scraper */
Route::get('/inventory-setup', 'ScraperController@create');

/* Test Routes */
Route::get('/test1', 'HomeController@test1');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
