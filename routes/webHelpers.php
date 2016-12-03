<?php 

class LoadRoutes {
    public static function pets() {
        Route::get('/home', 'PetController@index');
        Route::get("/pets/{id}/request", "PetController@requestEdit");
        Route::post("/pets/{id}/request", "PetController@fireRequest");
        Route::resource('/pets/queue', 'PetQueueController');
        Route::resource('/pets', 'PetController');
        Route::resource('/records', 'RecordController');
    }

    public static function profile() {
        Route::get("/profile", "ProfileController@basic");
        Route::patch("/profile", "ProfileController@updateBasic");

        Route::get("/profile/password", "ProfileController@password");
        Route::patch("/profile/password", "ProfileController@updatePassword");

        Route::get("/profile/contact", "ProfileController@contact");
        Route::patch("/profile/contact", "ProfileController@updateContact");

        Route::get("/profile/vet", "ProfileController@vet");
        Route::patch("/profile/vet", "ProfileController@updateVet");
    }

    public static function pdf() {
        Route::get("/pets/{id}/pdf/{action}", "PDFController@PetProfile");
    }

    public static function users() {
        Route::get("/users", "UserController@index");
        // Route::delete("/user/{id}", "UserController@destroy");
        Route::get('/user/{id}', "UserController@show");
        Route::put("/user/{id}/ban", "UserController@ban");
    }
}