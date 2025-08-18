<?php

namespace App\View\Components;

use Closure;
use App\Models\Service;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class ServicesInMain extends Component
{
    public $services;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->services = Cache::rememberForever('service_in_main', function () {
            return Service::select()->orderBy('order', 'ASC')->take(3)->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services-in-main');
    }
}
