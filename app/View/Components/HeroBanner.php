<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroBanner extends Component
{
    public function __construct(
        public $portfolio,
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.hero-banner');
    }
}
