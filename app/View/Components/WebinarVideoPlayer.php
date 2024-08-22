<?php

namespace App\View\Components;

use Closure;
use App\Models\Webinar;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class WebinarVideoPlayer extends Component
{

    public $last_webinar;
    public $webinars;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->last_webinar = Webinar::where('published', true)->latest()->skip(1)->first();
        $this->webinars = Webinar::latest()->where('published', true)->whereNotNull('video')->get();

        // Vamos a eliminar los duplicados en $this->webinars basandonos en el campo video
        $this->webinars = $this->webinars->unique('video');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.webinar-video-player');
    }
}
