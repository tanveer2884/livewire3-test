<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MasterLayout extends Component
{
    /**
     * The page title.
     *
     * @var string
     */
    public $menuName;


    /**
     * Create a new component instance.
     */
    public function __construct()
    {
      //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.master-layout');
    }
}
