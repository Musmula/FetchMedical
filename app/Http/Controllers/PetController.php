<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Support\Facades\Auth;

use Alert;

class PetController extends Controller
{
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
            
        ]);

        Pet::create([
            'user_id'   => Auth::user()->id,
            'name'      => $request->name,
            'species'   => $request->species,
            'breed'     => $request->breed,
            'gender'    => $request->gender,

        ]);

        Alert::success('Pet registered successfully');
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
            return view("pet.show", ['pet' => Pet::find($id)]);
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
        $pet = Pet::find($id);
        if ($this->hasPermission(Auth::user(), $pet)) {
            $pet->update($request->except(['_token', '_method']));
            alert()->success('Pet information updated');
            return redirect('/pets');
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
        if ($this->hasPermission(Auth::user(), $pet)) {
            $pet->delete();
            alert()->success('Pet deleted');
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
}
