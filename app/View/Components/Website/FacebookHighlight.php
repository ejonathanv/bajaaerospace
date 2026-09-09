<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FacebookHighlight extends Component
{
    /**
     * URL del post de Facebook a destacar.
     */
    public string $postUrl;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $postUrl = 'https://www.facebook.com/permalink.php?story_fbid=1718601650268179&id=100063550810364'
    ) {
        $this->postUrl = $postUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.facebook-highlight');
    }
}
