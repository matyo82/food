<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Blog;
use App\Models\Category;
use App\Models\General;
use App\Models\Menu;
use App\Models\Reserve;
use App\Models\Slider;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*    public function __construct()
        {
            $this->middleware('auth');
        }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $menus1 = Menu::orderBy('id', "DESC")->limit(4)->get();
        $blog = Blog::orderBy('created_at', "DESC")->limit(6)->get();
        $menus2 = Menu::orderBy('id')->limit(4)->get();
        $staff = Staff::all();
        return view('home', compact('sliders', 'menus1', 'menus2', 'staff', 'blog'));
    }

    public function menu()
    {
        $menus = Menu::orderBy('id', "DESC")->get();
        return view('frontend.menu', compact('menus'));
    }

    public function reserve(Request $request)
    {
        Reserve::create([
            'date' => $request->date,
            'time' => $request->time,
            'people' => $request->people,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 0
        ]);
        return back()->with('toast_success', 'Your application submitted');
    }

    public function blog()
    {
        $blog = Blog::all();

        return view('frontend.blog.index', compact('blog'));
    }

    public function getBlog(Blog $blog)
    {
        return view('frontend.blog.detail', compact('blog'));
    }

    public function getCategoryBlog($id)
    {
        $blog = Blog::where('category_id', $id)->get();

        return view('frontend.blog.index', compact('blog'));
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function mail(Request $request)
    {
        $general = General::latest('created_at')->first();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'message' => $request->message,
        ];

        Mail::to($general->email)->send(new Contact($data));
        return back()->with('success', 'your message has sent!');
    }
}
