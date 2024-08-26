<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        return view('web.index');
    }

    function about()
    {
        return view('web.about');
    }

    function services()
    {
        return view('web.solutions.index');
    }

    function pandm()
    {
        return view('web.pandm');
    }

    function contact()
    {
        return view('web.contact');
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
