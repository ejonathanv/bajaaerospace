<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostForm extends Component
{

    public $post;
    public $method;
    public $route;

    /**
     * Create a new component instance.
     */
    public function __construct($post = null, $method = 'POST')
    {
        $this->post = $post;
        $this->method = $method;
        $this->route = $this->getRoute();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.post-form');
    }

    public function getRoute()
    {
        if ($this->method == 'POST') {
            return route('posts.store');
        }
        return route('posts.update', $this->post);
    }
}
