<?php

namespace App\Livewire\About;

use App\Models\About;
use Livewire\Component;
use App\Livewire\MainLayout;
use Illuminate\Contracts\View\View;

class AboutShowController extends MainLayout
{
    public About $about;

    public $name;

    public $role;

    public $content;

    public function mount()
    {
       $this->name = $this->about->name;
       $this->role = $this->about->role;
       $this->content = $this->about->content;
    }

    public function render(): View
    {
        return $this->view('livewire.about.about-show-controller');
    }

    public function update()
    {
        $about = About::find($this->about->id);

        $about->update([
            'name' => $this->name,
            'role' => $this->role,
            'content' => $this->content,
        ]);

        return redirect()->route('about');
    }
}
