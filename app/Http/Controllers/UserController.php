<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $users = User::all();
        return view("user.all", compact('users'));
    }

    public function show($id) {
        return view("user.show", ['user' => User::find($id)]);
    }

    public function ban($id) {
        $target = User::find($id);
        DB::insert('insert into banned_users (id, name) values (?, ?)', [$id, $target->name]);
        $target->banned = 1;
        $target->save();
        alert()->success('Don\'t get overly trigger-happy with that button', 'The user has been banned')->autoclose(5000);
        return redirect('/home');
    }

    public function destroy($id) {
        User::find($id)->delete();
        alert()->success('User dropped');
        return redirect()->back();
    }

    public function showUsers() {
        $users = User::all();
        return view("user.admins", compact('users'));
    }

    public function admins(Request $request) {
        $user = User::find($request->user_id);
        if ($request->action == 'remove') {
            $user->is_admin = false;
        } else {
            $user->is_admin = true;
        }
        $user->save();
        return redirect()->back();
    }

}
