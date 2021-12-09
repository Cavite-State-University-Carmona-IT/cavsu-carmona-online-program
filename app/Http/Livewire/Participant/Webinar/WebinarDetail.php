<?php

namespace App\Http\Livewire\Participant\Webinar;

use Livewire\Component;

class WebinarDetail extends Component
{
    public $webinar;

    public function render()
    {
        return view('livewire.participant.webinar.webinar-detail');
    }
}
