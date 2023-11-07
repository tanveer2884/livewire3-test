<?php

namespace App\Livewire\About;

use App\Models\About;
use App\Livewire\MainLayout;
use Livewire\WithPagination;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;

class AboutIndexController extends MainLayout
{
    use WithPagination;
    
    
    public $search;

    public function render(): View
    {
       return $this->view('livewire.about.about');
    }

    public function getAboutProperty(): LengthAwarePaginator
    {
        return About::query()
            ->when($this->search, fn ($q) => $q->search($this->search))
            ->paginate(10);
    }

    public function delete($id)
    {
        return About::find($id)->delete();
    }
}
