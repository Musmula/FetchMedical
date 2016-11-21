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

Route::get('/', 'PagesController@welcome');

Route::get('/about', 'PagesController@about');

Auth::routes();

Route::get('/home', 'PetController@index');
Route::resource('pets', 'PetController');

Route::get("/settings", "SettingsController@index");
Route::post("/settings/basic", "SettingsController@updateBasicSettings");
Route::delete('/account', 'SettingsController@deleteAcc');
