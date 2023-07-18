<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Events extends Component
{

    public $event;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->event = $this->get_recent_event();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.events');
    }

    public function get_recent_event()
    {
        return \App\Models\Event::orderBy('start_date', 'desc')->latest()->first();
    }
}
