<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function showForm()
    {
        return view('contatti');
    }
    public function processForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
       
        return redirect()->route('contatti')->with('success', 'Messaggio inviato con successo!');
    }
}
