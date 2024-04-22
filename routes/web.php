<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AnimeController;


Route::get('/', [ViewController::class, 'home'])->name('homepage');

Route::get('/articoli', [ViewController::class, 'articles' ])->name('articoli');

Route::get('/articolo/{id}', [ViewController::class, 'article'])->name('articolo');

Route::view('/chi-sono', 'chi-sono')->name('chi-sono');

Route::view('/contatti', 'contatti')->name('contatti');

Route::get('/contatti', [viewController::class, 'showForm'])->name('contatti');

Route::post('/contatti', [ContactController::class, 'processForm'])->name('contact.processForm');


route::prefix('account')->middleware('auth')->group(function() {

    route::get('/', [AccountController::class, 'index'])->name('account.index');

    Route::resource('/articles', ArticleController::class);

    Route::resource('/categories', CategoryController::class);
});

Route::get('anime/genres', [Animecontroller::class, 'genres'])->name('anime.genres');
Route::get('anime/genres/{genre_id}', [Animecontroller::class, 'anime'])->name('anime');
Route::get('anime/{anime_id}', [Animecontroller::class, 'animeShow'])->name('anime.show');