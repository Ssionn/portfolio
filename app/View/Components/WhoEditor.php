<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WhoEditor extends Component
{
    public function __construct(
        public $who,
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.who-editor');
    }
}
