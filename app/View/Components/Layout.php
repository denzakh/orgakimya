<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{

    public function __construct(
        public string $title = '',
        public string $description = '',
    ) {
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('layouts.layout');
    }
}
