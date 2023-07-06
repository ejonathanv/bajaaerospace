<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageHeader extends Component
{

    public $title;
    public $subtitle;
    public $bgvideo;    

    /**
     * Create a new component instance.
     */
    public function __construct($title = null, $subtitle = null, $bgvideo = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->bgvideo = $bgvideo ? $bgvideo : 'pexels-frank-cone-3194277-1280x720-30fps.mp4';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.page-header');
    }
}
