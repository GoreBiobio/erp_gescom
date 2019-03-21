<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class leo extends Controller
{
    public function index()
    {
        return view('front_end.nuevo');
    }

    public function home()
    {
        return view(front_end.home);
    }
}

