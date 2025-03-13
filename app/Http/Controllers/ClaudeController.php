<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ClaudeService;

class ClaudeController extends Controller
{
    protected $claudeService;

    public function __construct(ClaudeService $claudeService)
    {
        $this->claudeService = $claudeService;
    }

    public function index(Request $request)
    {
        return view('claudeai.claude');
    }

    public function askClaude(Request $request)
    {
        $request->validate([
            'prompt' => 'required|string'
        ]);
        
        $result = $this->claudeService->generateCompletion($request->prompt);
        
        return response()->json($result);
    }
}
