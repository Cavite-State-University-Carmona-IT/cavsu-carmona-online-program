<?php

namespace App\Http\Livewire\Participant\Home;

use Livewire\Component;
use App\Models\Webinar;
use Carbon\Carbon;

class LatestWebinarsSection extends Component
{
    public function getLatestWebinarsProperty()
    {
        return Webinar::where('status', 2)->whereDate('date', '<=', Carbon::now())->orderBy('date', 'asc')->take(5)->get();
    }

    public function render()
    {
        return view('livewire.participant.home.latest-webinars-section', ['webinars'=>$this->latestWebinars]);
    }
}
