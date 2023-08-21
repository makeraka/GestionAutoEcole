<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function allUser()
    {
        $all = DB::table('users')->get();
        return view ('backend.user.all-user', compact('all'));
    }

    public function AddUser()
    {
        return view('backend.user.add-user');
    }

    public function InsertUser (Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required'
          
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make( $request->password);
        $user->save();
        Alert::success('Utilisateur Ajouter','Succes');
        return redirect('/all-user');
    }

    public function EditUser($id)
    {
        $user = User::find($id);
        return view('backend.user.edit-user', compact('user'));
    }

    public function UpdateUser(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make( $request->password)  ;
        $user->update();
        Alert::success('Utilisateur Modifier','Succes');
        return redirect('/all-user');

    }

    public function DeleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/all-user');

    }
}


