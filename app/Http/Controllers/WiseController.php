<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WiseController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        return view('home');
    }
}
