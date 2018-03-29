<?php

namespace App\Http\Controllers;

use App\Chat;
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

    }
}
