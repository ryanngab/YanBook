<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    ///return data all
    public function indexDash()
    {
        $data = User::count();

        return view('dashboard.index', compact('data'));
    }

    //return data user
    public function index()
    {
        //User
        $data = User::all();
        return view('dashboard.user', compact('data'));
    }

    ///return form edit
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

    // delete user
    public function destroy(Request $request, $id)
    {

         User::where('id', $id)->delete();

        return redirect('/user')->with('berhasil', 'berhasil di hapus ');
    }
     // return book
    public function books()
    {
        $book = Book::get();
        return view('dashboard.book',compact('book'));
    }


     public function store(Request $request)
    {
        //
        $validateDate = $request->validate([
            'title' => 'required',
            // 'category_id' => 'required',
            'book_code' => 'required',
            'cover' => 'image|file|max:1024',

        ]);

        if ($request->file('cover')) {
            $validateDate['cover'] = $request->file('image')->store('cover_books');
        }

        // $validateDate['user_id'] = auth()->user()->id;

        B::create($validateDate);
            return redirect()->route('dashboard.books')
                ->with('success', 'Berhasil Menyimpan');
    }
}
