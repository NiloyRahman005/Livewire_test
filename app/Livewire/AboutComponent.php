<?php

namespace App\Livewire;

use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        // Specify layout manually
        return view('livewire.about-component')->layout('layouts.app');
    }
}

