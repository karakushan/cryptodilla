<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\Models\Message;

class ChatsController extends Controller
{
    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        if ($request->message){
            $message = auth()->user()->messages()->create([
                'message' => $request->message
            ]);
            broadcast(new MessageSent(auth()->user(), $message))->toOthers();
        }

        return ['status' => 'Message Sent!'];
    }
}
