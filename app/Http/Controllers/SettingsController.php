<?php

namespace App\Http\Controllers;

use Alert;
use App\User;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index() {
        return view("settings");
    }

    public function updateBasicSettings(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'current_password' => '',
        ]);

        if (Hash::check($request->current_password, Auth::user()->password)) {
            $user = Auth::user();
            $user->name = isset($request->name) ? $request->name : Auth::user()->name;

            $users_with_that_email = count(User::where('email', $request->email)->get());

            if ($request->email != Auth::user()->email && $users_with_that_email == 0) {
                $user->email = $request->email;
            }

            elseif ($request->email != Auth::user()->email && $users_with_that_email > 0) {
                alert()->error('Email already in use');
                return redirect()->back();
            }

            if (isset($request->password) && $request->password == $request->password_confirmation && $request->password != "") {
                $user->password = isset($request->password) ? bcrypt($request->password) : Auth::user()->password;
            }

            $user->save();
            alert()->success('Your account information has been updated');
            return redirect()->back();
        }

        alert()->error('Your existing password does not match the one you inputed', 'Current password mismatch')->autoclose(5000);
        return redirect()->back();
    }

    public function deleteAcc() {
        Auth::user()->delete();
        alert()->success('Your account has been deleted');
        return redirect('/');
    }
}
