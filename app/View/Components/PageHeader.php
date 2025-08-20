<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageHeader extends Component
{
    public string $title;
    public string $banner;
    /**
     * Create a new component instance.
     */
    public function __construct(string $title = "Заголовок", $banner= null)
    {
        $this->title = $title;
        $this->banner = $banner?$banner:asset('img/all_1.webp');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-header');
    }
}
