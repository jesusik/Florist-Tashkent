<?php

namespace App\Http\Controllers\admin;

use App\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Message $message){
        $messages = Message::orderByDesc('id')->paginate(10);
        return view('admin.messages.index', [
            'messages' => $messages
        ]);
    }
}
