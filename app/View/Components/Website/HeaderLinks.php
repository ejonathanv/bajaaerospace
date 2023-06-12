<?php

namespace App\View\Components\Website;

use Closure;
use App\Models\Page;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class HeaderLinks extends Component
{

    public $pages;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->pages = $this->getPages();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.header-links');
    }

    public function getPages(){
        $pages = Page::where('add_to_navbar', true)->orderBy('title')->get();
        return $pages;
    }
}
