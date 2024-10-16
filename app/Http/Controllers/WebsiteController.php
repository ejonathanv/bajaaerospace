<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\Event;
use App\Models\Webinar;
use App\Mail\ContactForm;
use App\Models\Suscriber;
use Illuminate\Http\Request;
use App\Mail\ContactFormThanks;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home');
    }

    public function page(Page $page){
        return view('website.page', compact('page'));
    }

    public function about(){
        return view('website.about');
    }

    public function blog(){
        $posts = Post::orderBy('created_at', 'desc')->where('category', 'posts')->paginate(9);
        return view('website.blog', compact('posts'));
    }

    public function news(){
        $posts = Post::where('category', 'news')->orderBy('created_at', 'desc')->paginate(9);
        return view('website.news', compact('posts'));
    }

    public function events(){
        $events = Event::orderBy('created_at', 'desc')->paginate(10);
        return view('website.events', compact('events'));
    }

    public function event(Event $event){
        return view('website.event', compact('event'));
    }

    public function webinars(){
        $webinar = Webinar::where('published', true)->latest()->first();
        $last_webinar = Webinar::where('published', true)->latest()->skip(1)->first();
        return view('website.webinars', compact('webinar', 'last_webinar')); 
    }

    public function webinarRegister(){
        $webinar = Webinar::where('published', true)->latest()->first();
        return view('website.webinar-register', compact('webinar'));
    }

    public function webinarSuccessRegister(){
        $webinar = Webinar::where('published', true)->latest()->first();
        return view('website.webinar-register-thanks', compact('webinar'));
    }

    public function eventRegister(Event $event){
        return view('website.event-register', compact('event')); 
    }

    public function post(Post $post){
        $title = $post->title;
        $subtitle = $post->subtitle;
        return view('website.post', compact('post', 'title', 'subtitle'));
    }

    public function new(Post $post){
        $title = $post->title;
        $subtitle = $post->subtitle;
        return view('website.new', compact('post', 'title', 'subtitle'));
    }

    public function contact(){
        return view('website.contact');
    }

    public function contactForm(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable|numeric',
            'message' => 'required',
            'terms' => 'required|accepted',
        ]);

        if($request->newsletter){
            $subscriber = Suscriber::firstOrCreate([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactForm($request));

        Mail::to($request['email'])->send(new ContactFormThanks($request));

        return redirect()->back()->with('successContactForm', 'We have received your message, we will contact you shortly.');
    }

}
