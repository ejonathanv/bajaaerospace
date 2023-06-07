<?php

namespace App\View\Components\Admin;

use Closure;
use App\Models\Suscriber;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class RecentSuscribers extends Component
{

    public $suscribers;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->suscribers = $this->getRecentSuscribers();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.recent-suscribers');
    }

    /**
     * Get the recent suscribers.
     */
    private function getRecentSuscribers()
    {
        $suscribers = Suscriber::orderBy('created_at', 'desc')->take(5)->get();
        return $suscribers;
    }
}
