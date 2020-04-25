<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $articles = Article::All();
        return view('article.index', ['articles' => $articles]);
    }

    public function add()
    {
        return view('article.add');
    }

    public function create(Request $request)
    {
        $article = new Article;
        $article->user_id = $request->user()->id;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $article = Article::find($request->id);
        return view('article.edit', ['article' => $article]); 
    }

    public function update(Request $request)
    {
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $article = Article::find($request->id);
        return view('article.delete', ['article' => $article]); 
    }

    public function remove(Request $request)
    {
        $article = Article::find($request->id);
        $article->delete();
        return redirect('/');
    }
}


    public function index(Request $request)
    {
        $items=Chat::all();
        return view('chat.index',['items'=>$items]);
    }
    public function add(Request $request)
    {
        return view('chat.add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Chat::$rules);
        $chat=new Chat;
        $form=$request->all();
        unset($form['_token']);
        $chat->fill($form)->save();
        return redirect('/chat');
    }
    //
}
