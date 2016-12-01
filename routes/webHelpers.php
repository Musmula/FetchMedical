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
        Route::post("/profile", "ProfileController@basic");

        Route::get("/profile/password", "ProfileController@password");
        Route::post("/profile/password", "ProfileController@password");

        Route::get("/profile/contact", "ProfileController@contact");
        Route::post("/profile/contact", "ProfileController@contact");

        Route::get("/profile/vet", "ProfileController@vet");
        Route::post("/profile/vet", "ProfileController@vet");
    }

    public static function pdf() {
        Route::get("/pets/{id}/pdf/{action}", "PDFController@PetProfile");
    }
}