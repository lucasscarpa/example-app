<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CECController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        return view('cec.index');
    }

    public function admin()
    {
        return view('cec.pages.admin');
    }

    public function home()
    {
        return view('cec.pages.home');

    }

    public function submenu1()
    {
        return view('cec.pages.submenu1');
    }

    public function submenu2()
    {
        return view('cec.pages.submenu2');
    }
}
