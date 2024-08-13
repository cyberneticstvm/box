<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        return view('web.index');
    }

    function wcu()
    {
        return view('web.wcu');
    }

    function privacy()
    {
        return view('web.privacy-policy');
    }
}
