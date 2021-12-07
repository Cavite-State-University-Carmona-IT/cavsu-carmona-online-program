<?php

namespace App\Http\Livewire\Participant;

use Livewire\Component;
use App\Models\Webinar;
use Carbon\Carbon;

class UpcomingWebinarsSection extends Component
{
    public function getUpcomingWebinarsProperty()
    {
        return Webinar::where('status', 2)->whereDate('date', '>=', Carbon::now())->get();
    }

    public function render()
    {
        return view('livewire.participant.upcoming-webinars-section', ['upcoming_webinars' => $this->upcoming_webinars]);
    }
}
