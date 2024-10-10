<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoPostsLists extends Component
{

    public $other_videos;
    public $current;
    public $items;

    /**
     * Create a new component instance.
     */
    public function __construct($current)
    {
        $this->current = $current;
        $this->other_videos = \App\Models\VideoPost::where('id', '!=', $current->id)->latest()->take(9)->get();
        $this->items = \App\Models\VideoPost::latest()->take(9)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.video-posts-lists');
    }

    public function getAllItems(){
        
    }
}
