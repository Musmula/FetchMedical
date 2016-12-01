<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function basic() {
        return view("profile.basic", ['active' => 'basic']);
    }

    public function password() {
        return view("profile.password", ['active' => 'password']);
    }

    public function contact() {
        return view("profile.contact", ['active' => 'contact']);
    }

    public function vet() {
        return view("profile.vet", ['active' => 'vet']);
    }
}
