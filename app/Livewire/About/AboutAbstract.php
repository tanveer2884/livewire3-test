<?php

namespace App\Livewire\About;

use App\Models\About;
use App\Livewire\MainLayout;
use Illuminate\Contracts\View\View;

class AboutAbstract extends MainLayout
{
    
    public About $about;

    /**
     * Validation rules for artists
     *
     * @return array<mixed>
     */
    protected function rules(): array
    {
        return [
            'about.name' => 'bail|required|max:30',
            'about.role' => 'bail|required',
            'about.content' => 'bail|required',
        ];
    }

    /**
     * Save the artist in database
     */
    public function save(): void
    {
        $this->validate();

        $this->about->save();

        $type = $this->about->wasRecentlyCreated ? 'created' : 'updated';

       redirect()->back();
    }


    public function render(): View
    {
        return $this->view('livewire.about.about-show-controller');
    }
}