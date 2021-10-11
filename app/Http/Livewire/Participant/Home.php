<?php

namespace App\Http\Livewire\Participant;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.participant.home')
        ->layout('layouts.layout');
    }
}
