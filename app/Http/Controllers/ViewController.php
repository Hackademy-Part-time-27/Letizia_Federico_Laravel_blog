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
        $articoli = [
            [
                'title' => 'Titolo articolo 1',
                'category' => 'Categoria 1',
                'description' => 'Descrizione breve articolo 1'
            ],
            [
                'title' => 'Titolo articolo 2',
                'category' => 'Categoria 2',
                'description' => 'Descrizione breve articolo 2'
            ],
        ];
        return view('articoli', ['articoli' => $articoli]);
    }
    public function article($id)
    {
        $articoli = [
            [
                'title' => 'Titolo articolo 1',
                'category' => 'Categoria 1',
                'description' => 'Descrizione breve articolo 1'
            ],
            [
                'title' => 'Titolo articolo 2',
                'category' => 'Categoria 2',
                'description' => 'Descrizione breve articolo 2'
            ],
        ];
        $articolo = $articoli[$id];
        return view('articolo', ['articolo' => $articolo]);
    }


}
