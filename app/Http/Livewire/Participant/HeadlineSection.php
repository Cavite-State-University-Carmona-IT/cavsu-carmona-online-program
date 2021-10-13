<?php

namespace App\Http\Livewire\Participant;

use Livewire\Component;
use App\Models\Advertisement;

class HeadlineSection extends Component
{
    public $abc;
    public $incomingWebinar;

    public function mount()
    {
        $this->incomingWebinar = Advertisement::where('status', 1)->get();
        $this->abc = "Jaycel Olivo Test";
    }

    public function render()
    {
        return view('livewire.participant.headline-section');
    }
}
