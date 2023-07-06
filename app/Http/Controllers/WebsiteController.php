<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\Event;
use App\Models\Webinar;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home');
    }

    public function page(Page $page){
        return view('website.page', compact('page'));
    }

    public function blog(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(9);
        return view('website.blog', compact('posts'));
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

    public function contact(){
        return view('website.contact');
    }

}
