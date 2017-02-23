<?php

namespace App\Http\Controllers;

use Auth;
use File;
use App\Pet;
use Illuminate\Http\Request;

class RecordController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'admin']);
    }

    public function update(Request $request, $id)
    {

        $data = $request->except(['_token', '_method', 'pet_id', 'vet_certificate_file', 'notes_file']);

        $pet = Pet::find($request->pet_id);

        if ($request->hasFile('vet_certificate_file')) {
            if ($pet->info->vet_certificates_filename != null) {
                File::delete(storage_path('app/' . $pet->info->vet_certificates_filename));
            }

            $path = $request->vet_certificate_file->store('documents/' . Auth::user()->id);
            $data['vet_certificates_filename'] = $path;
        }

        if ($request->hasFile('notes_file')) {
            if ($pet->info->notes_file != null) {
                File::delete(storage_path('app/' . $pet->info->notes_filename));
            }

            $path = $request->notes_file->store('documents/' . Auth::user()->id);
            $data['notes_filename'] = $path;
        }

        // Nullify them empty strings because the database won't have those in integer fields
        foreach ($data as $key => $value) {
            if ($value == "") {
                $data[$key] = null;
            }
        }
        
        $generalRecords = $pet->info;
        $medicalRecords = $pet->medicalRecords;

        $medicalRecords->update($data);
        $generalRecords->update($data);
        alert()->success('Medical records updated');
        return redirect()->back();
    }
}
