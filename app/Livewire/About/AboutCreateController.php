<?php

namespace App\Livewire\About;

use App\Models\About;
use Livewire\Component;
use App\Livewire\MainLayout;

class AboutCreateController extends MainLayout
{
    public $name;
    
    public $role;

    public $content;

    public About $about;

    public function mount()
    {
       $this->about = new About();
    }

    public function render()
    {
        return $this->view('livewire.about.about-create-controller');
    }

    /**
     * Validation rules for artists
     *
     * @return array<mixed>
     */
    protected function rules(): array
    {
        return [
            'name' => 'bail|required|max:30',
            'role' => 'bail|required',
            'content' => 'bail|required',
        ];
    }


    public function save()
    {
        $this->validate();
        
        About::create(
            $this->only(['name', 'role', 'content'])
        );

        return $this->redirect(route('about'));
    }
}
