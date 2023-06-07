<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home');
    }

    public function page(){
        $page = Page::first();
        return view('website.page', compact('page'));
    }

}
