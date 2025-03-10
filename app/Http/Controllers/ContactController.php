<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function getContact(Request $request): View
    {
        return view('form.contact_form');
    }
}
