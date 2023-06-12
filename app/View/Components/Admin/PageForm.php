<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageForm extends Component
{

    public $page;
    public $method;
    public $route;

    /**
     * Create a new component instance.
     */
    public function __construct($page = null, $method = 'POST')
    {
        $this->page = $page;
        $this->method = $method;
        $this->route = $this->getRoute();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.page-form');
    }

    /**
     * Get the route for the form.
     */

    private function getRoute()
    {
        if ($this->method == 'POST') {
            return route('pages.store');
        } else {
            return route('pages.update', $this->page);
        }
    }
}
