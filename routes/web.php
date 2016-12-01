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

/*
|--------------------------------------------------------------------------
| LoadRoutes
|--------------------------------------------------------------------------
|
| LoadRoutes is a facade located in this directory in the webHelpers file.
| Composer is pulling that one in after which Laravel registers the facade
|
*/
LoadRoutes::pets();
LoadRoutes::profile();
LoadRoutes::pdf();

/*
|--------------------------------------------------------------------------
| The settings routes
|--------------------------------------------------------------------------
*/
Route::get("/settings", "SettingsController@index");
Route::post("/settings/basic", "SettingsController@updateBasicSettings");
Route::delete('/account', 'SettingsController@deleteAcc');

/*
|--------------------------------------------------------------------------
| The User management routes
|--------------------------------------------------------------------------
*/
Route::get("/users", "UserController@index");
// Route::delete("/user/{id}", "UserController@destroy");
Route::put("/user/{id}/ban", "UserController@ban");