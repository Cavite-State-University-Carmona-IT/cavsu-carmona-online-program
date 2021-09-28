<?php

namespace App\Http\Livewire\ProgramCoordinator\Dashboard;

use Livewire\Component;

class DashboardIndex extends Component
{
    public function render()
    {
        return view('livewire.program-coordinator.dashboard.dashboard-index')
        ->layout('layouts.layout-program-coordinator', ['menu' =>  'dashboard']);
    }
}
