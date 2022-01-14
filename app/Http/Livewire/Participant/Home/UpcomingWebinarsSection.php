<?php

namespace App\Http\Livewire\Participant\Home;

use Livewire\Component;
use App\Models\Webinar;
use Carbon\Carbon;

class UpcomingWebinarsSection extends Component
{
    public function getUpcomingWebinarsProperty()
    {
        return Webinar::where('status', 2)->whereDate('date', '>=', Carbon::now())->take(5)->get();
    }

    public function render()
    {
        return view('livewire.participant.home.upcoming-webinars-section', ['webinars'=>$this->upcomingWebinars]);
    }
}
