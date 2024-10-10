<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoCard extends Component
{

    public $video;
    public $cover;
    public $title;
    public $date;
    public $slug;
    public $theme;
    public $size;

    /**
     * Create a new component instance.
     */
    public function __construct($video, $theme = 'dark', $size = 'base')
    {
        $this->video = $video;
        $this->cover = $video->cover;
        $this->title = $video->title;
        $this->slug = $video->slug;
        $this->theme = $theme;
        $this->size = $size;
        $this->date = now()->subDays(rand(1, 10))->format('M d, Y');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.video-card');
    }
}
