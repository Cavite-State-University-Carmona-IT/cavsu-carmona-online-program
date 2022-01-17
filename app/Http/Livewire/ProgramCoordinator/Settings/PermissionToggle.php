<?php

namespace App\Http\Livewire\ProgramCoordinator\Settings;

use Livewire\Component;

class PermissionToggle extends Component
{
    public bool $isProgramCoordinator;
    public $user, $test;

    public function mount()
    {
        if($this->user->hasRole('program_coordinator')) {
            $this->isProgramCoordinator = true;
        } else {
            $this->isProgramCoordinator = false;
        }
    }

    public function updatingIsProgramCoordinator()
    {
        if($this->isProgramCoordinator == false) {
            $this->user->syncRoles(['program_coordinator']);
            $this->test = true;
        } else {
            $this->user->detachRole('program_coordinator');
            $this->test = false;
        }
        
    }

    public function render()
    {
        return view('livewire.program-coordinator.settings.permission-toggle');
    }
}
