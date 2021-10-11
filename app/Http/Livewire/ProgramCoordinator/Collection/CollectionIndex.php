<?php

namespace App\Http\Livewire\ProgramCoordinator\Collection;

use Livewire\Component;

class CollectionIndex extends Component
{
    public function render()
    {
        return view('livewire.program-coordinator.collection.collection-index')
        ->layout('layouts.layout-program-coordinator', ['menu' =>  'collection']);
    }
}
