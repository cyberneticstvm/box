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
        $title = "Best Storage & Moving Services For Homes & Offices In Dubai";
        $desc = "Get secure box storage, office storage, household storage, and movers & packers services In Dubai. Simplify your move with efficient, hassle-free solutions today!";
        return view('web.index', compact('title', 'desc'));
    }

    function about()
    {
        $title = "About Us – Move In Store";
        $desc = "Discover MoveInStore's story. We offer trusted moving and storage services in Dubai, dedicated to providing secure, affordable, and reliable solutions for your needs.";
        return view('web.about', compact('title', 'desc'));
    }

    function hhs()
    {
        $title = "Secure And Affordable Household Storage Services In Dubai";
        $desc = "Keep your belongings safe with reliable household storage services in Dubai. Enjoy secure, flexible, and affordable storage solutions for your home items today!";
        return view('web.solutions.hhs', compact('title', 'desc'));
    }
    function bs()
    {
        $title = "Secure And Convenient Box Storage Services In Dubai";
        $desc = "Store your items safely with our trusted box storage services in Dubai. Enjoy secure, affordable, and hassle-free solutions for all your personal or business storage needs";
        return view('web.solutions.bs', compact('title', 'desc'));
    }
    function os()
    {
        $title = "Reliable And Secure Office Storage Services In Dubai";
        $desc = "Optimize your workspace with secure office storage services in Dubai. Safely store documents, furniture, and equipment with flexible, affordable storage solutions today!";
        return view('web.solutions.os', compact('title', 'desc'));
    }

    function pandm()
    {
        $title = "Best Packers And Movers Services For Easy Relocation In Dubai";
        $desc = "Move effortlessly with expert packers and movers services in Dubai. Get safe, reliable packing, moving, and storage solutions for a stress-free relocation experience.";
        return view('web.pandm', compact('title', 'desc'));
    }

    function contact()
    {
        $title = "Contact Us – Move In Store";
        $desc = "Get in touch with MoveInStore for expert moving and storage services in Dubai. Contact us today for personalized assistance and secure, affordable solutions for your business.";
        return view('web.contact', compact('title', 'desc'));
    }

    function wcu()
    {
        $title = "Why Choose Us For Best Moving & Storage Solutions In Dubai";
        $desc = "Discover why MoveInStore is the best choice for secure, efficient, and affordable moving and storage services in Dubai. Trust our expertise for a seamless experience.";
        return view('web.wcu', compact('title', 'desc'));
    }

    function privacy()
    {
        $title = "Privacy Policy – Move In Store";
        $desc = "Read our Privacy Policy to understand how MoveInStore protects your personal information. We are committed to safeguarding your privacy and security.";
        return view('web.privacy-policy', compact('title', 'desc'));
    }

    function landing()
    {
        $title = "Best Storage & Moving Services For Homes & Offices In Dubai";
        $desc = "Get secure box storage, office storage, household storage, and movers & packers services In Dubai. Simplify your move with efficient, hassle-free solutions today!";
        return view('web.landing', compact('title', 'desc'));
    }

    function blogs()
    {
        $title = "Explore Our Blogs for Moving and Storage Tips & Insights";
        $desc = "Stay informed with our latest blogs on moving and storage in Dubai. Discover tips, expert advice, and solutions to make your relocation and storage hassle-free.";
        $blogs = Blog::where('status', 1)->latest()->get();
        return view('web.blogs', compact('blogs', 'title', 'desc'));
    }

    function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $title = $blog->title;
        $desc = $blog->description;
        return view('web.blog-details', compact('blog', 'title', 'desc'));
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
