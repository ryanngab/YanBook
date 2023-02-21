<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    ///menampilkan Jumalah User
    public function indexDash()
    {
        $data = User::count();

        return view('dashboard.index', compact('data'));
    }

    //menampilkan semua data user
    public function index()
    {
        //User
        $data = User::all();
        return view('dashboard.user', compact('data'));
    }

    ///menuju form edit
    public function editUser($id)
    {
        $data = User::where('id' , $id)->first();
        return view('dashboard\users\edit', compact('data'));
    }

    //isi form edit
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
            // 'email' => 'required',
            // 'password' => 'required',
        ]);

        $data = User::where('id', $id)->first();


        $data->update([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'address' => $request->address,

        ]);

        return redirect()->route('dashboard.index')->with('god', 'Wahahahha');
    }

    public function destroy(Request $request, $id)
    {

         User::where('id', $id)->delete();

        return redirect('/user')->with('berhasil', 'berhasil di hapus ');
    }

}