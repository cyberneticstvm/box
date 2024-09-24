<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitEmail;
use App\Mail\GetQuoteSubmitEmail;
use App\Models\Blog;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Rules\ReCaptcha;

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

    function landing()
    {
        return view('web.landing');
    }

    function blogs()
    {
        $blogs = Blog::where('status', 1)->latest()->get();
        return view('web.blogs', compact('blogs'));
    }

    function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('web.blog-details', compact('blog'));
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

    function submitQuote(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'service' => 'required',
            'location' => 'required',
            //'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
        try {
            Mail::to('info@moveinstore.com')->send(new GetQuoteSubmitEmail($request));
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('thankyou')->with(['success' => 'Contact Form Submit Successfully']);
    }

    public function thankyou()
    {
        return view('web.thankyou');
    }

    public function sitemap()
    {
        return response()->view('web.sitemap')->header('Content-Type', 'text/xml');
    }

    public function robots()
    {
        return response()->view('web.robots')->header('Content-Type', 'text/plain');
    }
}
