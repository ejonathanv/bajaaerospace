<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentVideoPosts extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.recent-video-posts');
    }

    public function videos(){
        
        $videos = \App\Models\VideoPost::latest()->where('is_published', true)->take(3)->get();

        return $videos;
    }
}
