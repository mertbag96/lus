<?php

namespace App\View\Components\Website\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Auth extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $formTitle,
        public string $formDescription
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.layouts.auth');
    }
}
