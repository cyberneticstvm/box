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

    function hhs()
    {
        return view('web.solutions.hhs');
    }
    function bs()
    {
        return view('web.solutions.bs');
    }
    function os()
    {
        return view('web.solutions.os');
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
