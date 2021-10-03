<?php

namespace App\Http\Livewire\ProgramCoordinator\Webinar;

use Livewire\Component;

class WebinarIndex extends Component
{
    public function render()
    {
        return view('livewire.program-coordinator.webinar.webinar-index')
        ->layout('layouts.layout-program-coordinator', ['menu' =>  'webinar']);
    }
}
