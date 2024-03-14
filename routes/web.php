<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage', ['blogName' => 'Il mio fantastico blog']);
})->name('homepage');

Route::get('/articoli', function () {
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
})->name('articoli');

Route::get('/articolo/{id}', function ($id) {
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
})->name('articolo');

Route::view('/chi-sono', 'chi-sono')->name('chi-sono');

Route::view('/contatti', 'contatti')->name('contatti');
