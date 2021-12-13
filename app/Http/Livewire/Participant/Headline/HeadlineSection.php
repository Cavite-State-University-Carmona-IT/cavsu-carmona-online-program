<?php

namespace App\Http\Livewire\Participant\Headline;

use Livewire\Component;
use App\Models\Webinar;
use Carbon\Carbon;
class HeadlineSection extends Component
{
    public function getPublishedUpcomingWebinarsProperty()
    {
        return Webinar::where('status', 2)->whereDate('date', '>=', Carbon::now())->get();
    }

    public function render()
    {
        return view('livewire.participant.headline.headline-section');
    }
}
