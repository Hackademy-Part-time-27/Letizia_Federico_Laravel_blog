<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create()
    {
        return view('creaArticoli');
    }
    public function store(Request $request)
    {
        Article::create($request->all());

        return  redirect()->back()->with(['success'=>'Articolo inserito con successo']);
    }
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);
    }
}
