<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{

	public function __construct(
        public string $title = '111',
        public string $description = '222',
    ) {}
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('layouts.layout');
    }
}
