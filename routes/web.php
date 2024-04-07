<?php

use App\Http\Controllers\ViewController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AccountController;

Route::get('/', [ViewController::class, 'home'])->name('homepage');

Route::get('/articoli', [ViewController::class, 'articles' ])->name('articoli');

Route::get('/articolo/{id}', [ViewController::class, 'article'])->name('articolo');

Route::view('/chi-sono', 'chi-sono')->name('chi-sono');

Route::view('/contatti', 'contatti')->name('contatti');

Route::get('/contatti', [viewController::class, 'showForm'])->name('contatti');

Route::post('/contatti', [ContactController::class, 'processForm'])->name('contact.processForm');


route::middleware('auth')->group(function() {

    Route::get('/account/articoli/crea', [ArticleController::class, 'create'])->name('creaArticoli');
    Route::post('/account/articoli/store', [ArticleController::class, 'store'])->name('storeArticoli');
    Route::get('/account/articles', [ArticleController::class, 'index'])->name('articoliAuth');
    route::get('/account', [AccountController::class, 'index'])->name('account.index');

});