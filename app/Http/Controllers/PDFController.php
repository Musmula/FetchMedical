<?php

namespace App\Http\Controllers;

use PDF;
use App\Pet;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function PetProfileDownload($id) {
        $pet = Pet::find($id);
        // $pdf = PDF::loadview('pet.pdf.profile', ['pet' => $pet]);
        // return $pdf->stream();
        return view('pet.pdf.profile', ['pet' => $pet]);
    }
}
