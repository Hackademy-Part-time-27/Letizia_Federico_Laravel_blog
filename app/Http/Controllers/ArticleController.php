<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create()
    {
        Article::create([
            'title' => 'Titolo dell\'articolo2',
            'category' => 'categoria',
            'description' => 'descrizione',
            'body' => 'Contenuto dell\'articolo...',
            'visible' => true,
        ]);

        return 'Articolo creato con successo!';
    }

    public function index()
    {
        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);
    }
}
