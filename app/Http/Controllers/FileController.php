<?php

namespace App\Http\Controllers;

use File;
use Alert;
use App\Pet;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function notes($id) {
        $pet = Pet::find($id);
        if (File::exists(storage_path('app/' . $pet->info->notes_filename))) {
            return response()->download(storage_path('app/' . $pet->info->notes_filename));
        }
        alert()->error('File not found');
        return redirect()->back();
    }

    public function vaccine($id) {
        $pet = Pet::find($id);
        if (File::exists(storage_path('app/' . $pet->info->vet_certificates_filename))) {
            return response()->download(storage_path('app/' . $pet->info->vet_certificates_filename));
        }
        alert()->error('File not found');
        return redirect()->back();
    }
}
