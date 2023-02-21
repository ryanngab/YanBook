<?php

namespace App\Http\Controllers;

use \App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function register()
    {
     return view('auth.register');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $request['password'] = bcrypt($request['password']);

        $request = User::create([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'address' => $request->address,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil! , silahkan Login');
    }
}