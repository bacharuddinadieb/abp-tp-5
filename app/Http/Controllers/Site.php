<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site extends Controller
{
    public function index()
    {
        return response()->make(view('login'), 200);
    }
}
