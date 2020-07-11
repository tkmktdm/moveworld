<?php

namespace App\Http\Controllers\Kotonoha;

use App\Chat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $chats = Chat::All();
        return view('chat.index', ['chats' => $chats]);
    }

    public function add()
    {
        return view('chat.add');
    }

    public function create(Request $request)
    {
        $chat = new Chat;
        $chat->user_id = $request->user()->id;
        $chat->title = $request->title;
        $chat->content = $request->content;
        $chat->save();
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $chat = Chat::find($request->id);
        return view('kotonoha.chat.edit', ['chat' => $chat]); 
    }

    public function update(Request $request)
    {
        $chat = Chat::find($request->id);
        $chat->title = $request->title;
        $chat->content = $request->content;
        $chat->save();
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $chat = Chat::find($request->id);
        return view('kotonoha.chat.delete', ['chat' => $chat]); 
    }

    public function remove(Request $request)
    {
        $chat = Chat::find($request->id);
        $chat->delete();
        return redirect('/');
    }
}
