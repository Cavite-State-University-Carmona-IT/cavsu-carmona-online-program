<?php

namespace App\Http\Livewire\ProgramCoordinator\Settings\RolesPermissions;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.program-coordinator.settings.roles-permissions.index')
        ->layout('layouts.app');
    }
}
