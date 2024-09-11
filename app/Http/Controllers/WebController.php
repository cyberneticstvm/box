<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitEmail;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    function blogs()
    {
        return view('web.blogs');
    }

    function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img('math')]);
    }

    function contactSubmit(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => 'required',
                'number' => 'required',
                'service' => 'required',
                'message' => 'required',
            ]
        );
        try {
            Mail::to('info@moveinstore.com')->send(new ContactFormSubmitEmail($request));
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Contact form submitted successfully!");
    }
}
