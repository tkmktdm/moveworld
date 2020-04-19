<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
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
