<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoForm extends Component
{


    public $video;
    public $method;

    /**
     * Create a new component instance.
     */
    public function __construct($video = null, $method)
    {
        $this->video = $video;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.video-form');
    }

    public function route(){
        $method = $this->method;
        if($method == 'POST'){
            return route('video-posts.store');
        }else{
            return route('video-posts.update', $this->video);
        }
    }
}
