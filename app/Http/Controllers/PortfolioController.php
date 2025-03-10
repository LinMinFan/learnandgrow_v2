<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function getApi(Request $request): View
    {
        return view('portfolio.api');
    }
}
