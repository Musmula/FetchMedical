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
Route::get("/pets/{id}/request", "PetController@requestEdit");
Route::post("/pets/{id}/request", "PetController@fireRequest");
Route::resource('/pets/queue', 'PetQueueController');
Route::resource('/pets', 'PetController');
Route::resource('/records', 'RecordController');


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

// 
// 
// 
// Testing shit
Route::get("/pets/{id}/pdf/{action}", "PDFController@PetProfile");
