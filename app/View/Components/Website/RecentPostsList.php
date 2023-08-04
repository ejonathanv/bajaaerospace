<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentPostsList extends Component
{

    public $current;
    public $other_posts;

    /**
     * Create a new component instance.
     */
    public function __construct($current = null)
    {
        $this->current = $current;
        $this->other_posts = $this->getOtherPosts();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.recent-posts-list');
    }

    public function getOtherPosts()
    {
        if($this->current == null){
            return \App\Models\Post::orderBy('created_at', 'desc')
                ->take(5)
                ->get();
        }else{

            return \App\Models\Post::where('id', '!=', $this->current->id)
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
        }
    }
}
