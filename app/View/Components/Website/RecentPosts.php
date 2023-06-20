<?php

namespace App\View\Components\Website;

use Closure;
use App\Models\Post;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class RecentPosts extends Component
{

    public $posts;
    public $recentPost;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->posts = $this->getPosts();
        $this->recentPost = $this->getRecentPost();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.recent-posts');
    }

    public function getRecentPost()
    {
        $recentPost = Post::orderBy('created_at', 'desc')->first();
        return $recentPost;
    }

    public function getPosts()
    { 
        $recentPost = $this->getRecentPost();  
        if(!$recentPost) return null;
        $posts = Post::where('id', '!=', $recentPost->id)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
        return $posts;
    }
}
