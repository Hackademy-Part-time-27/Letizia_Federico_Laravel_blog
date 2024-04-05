<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function create()
    {
        return view('creaArticoli');
    }
    public function store(StoreArticleRequest $request)
    {
        $article = Article::create($request->all());

        if($request->hasFile('image') &&  $request->file('image')->isValid()) {
            
            $extension = $request->file('image')->extension();

            $fileName = 'image' . $extension;

            $fileName =$request->file('image')->getClientOriginalName();

            $fileName = uniqid('image') . '.' .  $extension;

            $article->image = $request->file('image')->storeAs('public/image', $fileName);

            $article->save();
        }

        

        return  redirect()->back()->with(['success'=>'Articolo inserito con successo']);
    }


    public function index()
    {
        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);
    }
    
}
