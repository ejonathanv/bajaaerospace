<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleForm extends Component
{

    public $article;
    public $method;
    public $route;

    /**
     * Create a new component instance.
     */
    public function __construct($article = null, $method = 'POST')
    {
        $this->article = $article;
        $this->method = $method;
        $this->route = $this->getRoute();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article-form');
    }

    public function getRoute()
    {
        if ($this->method == 'POST') {
            return route('articles.store');
        }else if ($this->method == 'PUT') {
            return route('articles.update', $this->article);
        }
        
    }
}
