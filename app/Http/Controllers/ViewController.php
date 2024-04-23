<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        return view('homepage');
    }
    public function articles()
    {
        $articoli = \App\Models\Article::all();

        return view('articles.articoli', ['articoli' => $articoli]);
    }
    public function article($id)
    {
        $articolo = \App\Models\Article::findOrFail($id);
        return view('articles.articolo', ['articolo' => $articolo]);
    }
    public function showForm()
    {
        return view('contatti');
    }

    public function searchUsers()
    {
        return view('search-users');
    }
    
}
