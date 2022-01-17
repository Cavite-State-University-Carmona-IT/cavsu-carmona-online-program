<?php

namespace App\Http\Livewire\ProgramCoordinator\Settings;

use Livewire\Component;

class SettingsIndex extends Component
{
    public function render()
    {
        return view('livewire.program-coordinator.settings.settings-index')
        ->layout('layouts.app');
    }
}
