<?php

namespace App\View\Components\Admin;

use Closure;
use App\Models\Post;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class RecentPostsList extends Component
{

    public $posts;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->posts = $this->getPosts();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.recent-posts-list');
    }

    public function getPosts()
    {
        $posts = Post::latest()->take(5)->get();
        return $posts;
    }
}
