<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Title extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $level = 1,
        public string $variant = 'page',
        public string $align = 'left'
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.title');
    }
}
