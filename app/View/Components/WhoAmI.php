<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WhoAmI extends Component
{
    public function __construct(
        public string $title,
        public string $description
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.who-am-i');
    }
}
