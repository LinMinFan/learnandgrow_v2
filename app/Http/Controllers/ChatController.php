<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ChatGPTService;

class ChatController extends Controller
{
    protected ChatGPTService $chatGPT;

    public function __construct(ChatGPTService $chatGPT)
    {
        $this->chatGPT = $chatGPT;
    }

    public function index(Request $request)
    {
        return view('chatgpt.chat');
    }

    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $message = $request->input('message');
        $response = $this->chatGPT->chat($message);

        return response()->json(['response' => $response]);
    }
}
