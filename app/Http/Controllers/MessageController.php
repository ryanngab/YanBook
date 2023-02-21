<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //

    public function index()
    {
        return view('landing.welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required'
        ]);

        Message::create($request->all());

        return redirect()->route('landing.index')
        ->with('berhasil', 'Pesan Terkirim');

    }





}