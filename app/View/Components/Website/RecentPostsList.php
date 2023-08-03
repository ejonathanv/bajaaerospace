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
    public function __construct($current)
    {
        $this->current = $current;
        $this->other_posts = \App\Models\Post::where('id', '!=', $current->id)->orderBy('created_at', 'desc')->take(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.recent-posts-list');
    }
}
