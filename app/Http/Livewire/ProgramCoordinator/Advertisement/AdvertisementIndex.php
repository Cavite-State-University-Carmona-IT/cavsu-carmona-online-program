<?php

namespace App\Http\Livewire\ProgramCoordinator\Advertisement;

use Livewire\Component;

class AdvertisementIndex extends Component
{
    public function render()
    {
        return view('livewire.program-coordinator.advertisement.advertisement-index')
        ->layout('layouts.layout-program-coordinator', ['menu' =>  'advertisement']);
    }
}
