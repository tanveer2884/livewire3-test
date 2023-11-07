<?php

namespace App\Livewire;

use Closure;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use App\View\Components\MasterLayout;


class MainLayout extends Component
{

    /**
     * @param  view-string  $view
     */
    public function view(string $view, Closure $closure = null): View
    {
        return tap(view($view), $closure)
            ->layout(MasterLayout::class);
    }
}
