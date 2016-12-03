<?php 

class LoadRoutes {
    public static function all() {
        $router = new self;
        $router->pets();
        $router->profile();
        $router->pdf();
        $router->users();

        return $router;
    }

    public static function load() {
        $router = new self;

        return $router;
    }

    public function pets() {
        Route::get('/home', 'PetController@index');
        Route::get("/pets/{id}/request", "PetController@requestEdit");
        Route::post("/pets/{id}/request", "PetController@fireRequest");
        Route::resource('/pets/queue', 'PetQueueController');
        Route::resource('/pets', 'PetController');
        Route::resource('/records', 'RecordController');
    }

    public function profile() {
        Route::get("/profile", "ProfileController@basic");
        Route::patch("/profile", "ProfileController@updateBasic");

        Route::get("/profile/password", "ProfileController@password");
        Route::patch("/profile/password", "ProfileController@updatePassword");

        Route::get("/profile/contact", "ProfileController@contact");
        Route::patch("/profile/contact", "ProfileController@updateContact");

        Route::get("/profile/vet", "ProfileController@vet");
        Route::patch("/profile/vet", "ProfileController@updateVet");

        Route::delete('/account', 'ProfileController@deleteAcc');
    }

    public function pdf() {
        Route::get("/pets/{id}/pdf/{action}", "PDFController@PetProfile");
    }

    public function users() {
        Route::get("/users", "UserController@index");
        // Route::delete("/user/{id}", "UserController@destroy");
        Route::get('/user/{id}', "UserController@show");
        Route::put("/user/{id}/ban", "UserController@ban");
    }
}