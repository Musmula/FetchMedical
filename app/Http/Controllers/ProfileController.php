<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class ProfileController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function basic(Request $request) {
        return view("profile.basic", ['active' => 'basic']);
    }

    public function updateBasic(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        Auth::user()->update($request->except('_method', '_token'));
        alert()->success('Profile updated');
        return redirect()->back();
    }

    public function password() {
        return view("profile.password", ['active' => 'password']);
    }

    public function updatePassword(Request $request) {
        // return $request->all();
        $this->validate($request, [
            'newPassword' => 'required|confirmed',
            'password' => 'required',
        ]);

        if (Hash::check($request->password, Auth::user()->password)) {
            Auth::user()->update(['password' => Hash::make($request->newPassword)]);
            alert()->success('Password updated');
            return redirect()->back();
        }

        return redirect()->back()->withErrors(['password' => 'The password you provided doesn\'t mactch our records']);
    }

    public function contact() {
        return view("profile.contact", ['active' => 'contact']);
    }

    public function updateContact(Request $request) {
        Auth::user()->contact->update($request->except(['_token', '_method']));
        alert()->success('Contact information updated');
        return redirect()->back();
    }

    public function vet() {
        if (count(Auth::user()->pets) == 0 && !Auth::user()->passTutorial) {
            alert()->info('Please provide the contact information for your pet\'s veterinarian.', 'Vet contact info')->persistent('Ok');
        }
        return view("profile.vet", ['active' => 'vet']);
    }

    public function updateVet(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
        ]);
        Auth::user()->vet->update($request->except('_method', '_token'));
        if (Auth::user()->passTutorial) {
            return redirect()->back();
        }
        Auth::user()->update(['passTutorial' => 1]);
        alert()->success('You can now register your pets', 'Vet information updated')->persistent('Ok');
        return redirect('pets');
    }

    public function deleteAcc() {
        Auth::user()->delete();
        alert()->success('Your account has been deleted');
        return redirect('/');
    }
}
