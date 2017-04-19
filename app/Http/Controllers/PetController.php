<?php

namespace App\Http\Controllers;

use File;
use Alert;
use Image;
use App\Pet;
use App\PetQueue;
use App\CatRecord;
use App\DogRecord;
use App\AgnosticInfo;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pet.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pet.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'species'   => 'required',
            'breed'     => 'required',
            'gender'    => 'required',
            'picture'   => 'file'

        ]);

        $filename = 'Default.jpg';

        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            Image::make($picture)->fit(300)->save(public_path() . '/uploads/petImages/' . $filename);
        }

        $pet = Pet::create([
            'user_id'   => Auth::user()->id,
            'picture'   => $filename,
            'name'      => $request->name,
            'species'   => $request->species,
            'breed'     => $request->breed,
            'color'     => $request->color,
            'gender'    => $request->gender,
            'notes'     => $request->notes,
            
        ]);

        PetQueue::create([
            'pet_id'    => $pet->id,
            'name'      => $pet->name,
            'type'      => 'Pet registration',
            'message'   => 'This action has been triggered automatically when the pet was registered. Please fill in the medical records for this pet for the first time.',
        ]);

        // Make 'em medical records
        AgnosticInfo::create(['pet_id' => $pet->id]);

        if ($pet->species == 'Cat') {
            CatRecord::create(['pet_id' => $pet->id]);
        }

        else {
            DogRecord::create(['pet_id' => $pet->id]);
        }
        // End of medical records

        Alert::success('Thank you! Your message has been sent!')->persistent('Ok');
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet = Pet::find($id);
        if ($this->hasPermission(Auth::user(), $pet)) {
            return view("pet.show", [
                'pet'       => $pet,
                'info'      => $pet->info,
                'medical'   => $pet->medicalRecords
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pet = Pet::find($id);
        if ($this->hasPermission(Auth::user(), $pet)) {
            return view("pet.edit", ['pet' => Pet::find($id)]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'      => 'required',
            'picture'   => 'file'
        ]);

        $pet = Pet::find($id);
        if ($this->hasPermission(Auth::user(), $pet)) {
            if (Auth::user()->is_admin) {
                // return $request->processed;
                if ($request->species != $pet->species) {
                    swapSpecies($pet);
                }

                $pet->update($request->except(['_token', '_method']));
            }

            else {
                $pet->name  = $request->name;
                $pet->notes = $request->notes;
                $pet->save();
            }

            $filename = $pet->picture;

            if ($request->hasFile('picture')) {
                File::delete(public_path() . '/uploads/petImages/' . $pet->picture);
                $picture = $request->file('picture');
                $filename = time() . '.' . $picture->getClientOriginalExtension();
                Image::make($picture)->fit(300)->save(public_path() . '/uploads/petImages/' . $filename);
            }
            $pet->picture = $filename;
            $pet->save();
            
            alert()->success('Pet information updated');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pet = Pet::find($id);
        if ($pet->info->vet_certificates_filename != null) {
            File::delete(storage_path('app/' . $pet->info->vet_certificates_filename));
        }

        if ($pet->info->notes_filename != null) {
            File::delete(storage_path('app/' . $pet->info->notes_filename));
        }

        if ($this->hasPermission(Auth::user(), $pet)) {
            if ($pet->picture != "Default.jpg") {
                unlink(public_path() . '/uploads/petImages/' . $pet->picture);
                File::delete(public_path() . '/uploads/petImages/' . $pet->picture);
            }

            $pet->delete();
            alert()->success('Pet records deleted');
            return redirect('/pets');
        }
    }

    public function hasPermission($user, $pet) {
        if ($user->is_admin) {
            return true;
        }

        if ($pet->user == $user) {
            return true;
        }

        alert()->error('You don\'t have permission to access this page');
        return redirect('/pets');
    }

    public function requestEdit($id) {
        return view("pet.editRequest", ['pet' => Pet::find($id)]);
    }

    public function fireRequest(Request $request, $id) {
        PetQueue::create([
            'pet_id'    => $id,
            'name'      => $request->name,
            'type'      => 'User request',
            'message'   => $request->message
        ]);

        alert()->success('Thank you! Your message has been sent!')->persistent('Close');
        return redirect('/pets/' . $id);
    }
}
