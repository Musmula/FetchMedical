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

    public function PetProfile($id, $action) {
        $pet = Pet::find($id);
        
        $pdf = PDF::loadview('pet.pdf.profile', [
            'pet'       => $pet,
            'info'      => $pet->info,
            'medical'   => $pet->medicalRecords,
            'user'      => $pet->user
        ]);
        if ($action == 'view') {
            return $pdf->stream();
        }
        return $pdf->download('Fetchmedical profile for ' . $pet->name . '.pdf');
        // return view('pet.pdf.profile', ['pet' => $pet]);
    }
}
