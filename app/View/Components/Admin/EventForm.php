<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EventForm extends Component
{

    public $event;
    public $method;
    public $route;

    /**
     * Create a new component instance.
     */
    public function __construct($event = null, $method = 'POST')
    {
        $this->event = $event;
        $this->method = $method;
        $this->route = $this->setRoute();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.event-form');
    }

    /**
     * Set the route for the form.
     */
    private function setRoute(): string
    {
        if ($this->method === 'POST') {
            return route('events.store');
        }

        return route('events.update', $this->event);
    }
}
