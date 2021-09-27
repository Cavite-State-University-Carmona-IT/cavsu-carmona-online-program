<?php

namespace App\Http\Livewire\Participant\HomeUser;

use Livewire\Component;

class HomeUser extends Component
{
    public function render()
    {
        return view('livewire.participant.home-user.home-user')
        ->layout('layouts.app', ['header' => 'Post Compoent Page']);
    }
}
