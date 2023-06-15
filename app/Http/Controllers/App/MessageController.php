<?php

namespace App\Http\Controllers\App;

use App\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(Request $request)
    {
        $data = $request->validate([
            'name' => "required|string|max:255",
            'phone' => "required|digits:9",
            'message' => "required|string|max:65535",
        ]);
        $message = Message::create($data);

        return redirect()->route('app.home');
    }
}
