<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('/chi-sono', function () {
    $titolo = 'Chi Sono';
    $descrizione = 'Sono un appassionato di tecnologia e programmazione.';
    return view('chi-sono', compact('titolo', 'descrizione'));
})->name('chi-sono');
