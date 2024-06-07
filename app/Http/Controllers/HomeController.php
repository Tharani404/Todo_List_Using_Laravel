<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()//route ekt dunn function name.
    {
        return view('pages.home.index');
    }
}
