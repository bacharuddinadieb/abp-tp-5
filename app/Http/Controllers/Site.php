<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site extends Controller
{
    public function index()
    {
        return response()->make(view('login'), 200);
    }

    public function auth(Request $request)
    {
        session(['login' => $request->post()]);
        return redirect('home');
    }

    public function home()
    {
        return response()->make(view('home'), 200);
    }
}
