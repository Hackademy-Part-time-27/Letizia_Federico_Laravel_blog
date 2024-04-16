<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewArticle;

class ArticleController extends Controller
{
    public function create()
    {
        return view('articles.create', ['categories' => Category::all()]);
    }


    public function store(StoreArticleRequest $request)
    {
        $article = Article::create($request->all());

        // Mail::to('Admin@example.com')->send(new NewArticle($article->title));

        if($request->hasFile('image') &&  $request->file('image')->isValid()) {
            
            $extension = $request->file('image')->extension();

            $fileName = 'image' . $extension;

            $fileName =$request->file('image')->getClientOriginalName();

            $fileName = uniqid('image') . '.' .  $extension;

            $article->image = $request->file('image')->storeAs('public/image/' . $article -> id, $fileName);

            $article->save();
        }

        

        return  redirect()->back()->with(['success'=>'Articolo inserito con successo']);
    }


    public function index()
    {
        return view('articles.index', ['articles' => Article::all()]);
    }

    public function edit (Article $article)
    {
        return view('articles.edit', [
            'article' => $article,
            'categories' => Category::all()
        ]);
    }

    public function update(StoreArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        return  redirect()->back()->with(['success'=>'Articolo modificato con successo']);   
    }


    public function destroy(Article  $article)
    {
        $article->delete();

        return  redirect()->back()->with(['success'=>'Articolo eliminato con successo']);   
    }
    
}
