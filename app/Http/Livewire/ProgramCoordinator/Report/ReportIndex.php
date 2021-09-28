<?php

namespace App\Http\Livewire\ProgramCoordinator\Report;

use Livewire\Component;

class ReportIndex extends Component
{
    public function render()
    {
        return view('livewire.program-coordinator.report.report-index')
        ->layout('layouts.layout-program-coordinator', ['menu' =>  'report']);
    }
}
