<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;

Route::get('/', [ViewController::class, 'home'])->name('homepage');

Route::get('/articoli', [ViewController::class, 'articles' ])->name('articoli');

Route::get('/articolo/{id}', [ViewController::class, 'article'])->name('articolo');

Route::view('/chi-sono', 'chi-sono')->name('chi-sono');

Route::view('/contatti', 'contatti')->name('contatti');

Route::get('/contatti', [viewController::class, 'showForm'])->name('contatti');

Route::post('/contatti', [ContactController::class, 'processForm'])->name('contact.processForm');


route::prefix('account')->middleware('auth')->group(function() {

    route::get('/', [AccountController::class, 'index'])->name('account.index');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articoliAuth');
    Route::get('/articoli/crea', [ArticleController::class, 'create'])->name('creaArticoli');
    Route::post('/articoli/store', [ArticleController::class, 'store'])->name('storeArticoli');
    

    route::resource('/categories', CategoryController::class);
});