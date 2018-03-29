<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function store(Request $request){

        print_r($request->coach_id);
        $chat = new Chat;
        $chat->advertisement_id = $request->ad_id;
        $chat->coach_id = $request->coach_id;
        $chat->student_id = Auth::id();
        $chat->save();
        return redirect('/chat');

    }

    public function overview(){
        $chats = Chat::where('student_id',Auth::id())->orWhere('coach_id',Auth::id())->get();
         return view('chat',compact('chats'));
    }

    public function show($chat_id){

        $messages = Message::where('chat_id',$chat_id)->get();
        return view('chatscreen',compact('messages','chat_id'));

    }

    public function storeMessage(Request $request){

        $message = new Message;
        $message -> chat_id = $request -> chat_id;
        $message -> sender_id = Auth::id();
        $message -> message = $request -> message;
        $message -> save();
        return redirect('/chat/'.$request->chat_id);
    }
}
