<?php

namespace App\View\Components\Website\Partials\Auth;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Right extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $description
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.partials.auth.right');
    }
}
