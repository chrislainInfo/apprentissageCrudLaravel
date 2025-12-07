<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class See extends Component
{

    public $color;
    /**
     * Create a new component instance.
     */
    public function __construct($color = null)
    {
        //
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.see');
    }
}
