<?php

namespace App\Http\Livewire\Participant\Headline;

use Livewire\Component;
use App\Models\Webinar;
use Carbon\Carbon;

class HeadlineWebinarsSection extends Component
{
    public function getUpcomingWebinarsProperty()
    {
        return Webinar::where('status', 2)->whereDate('date', '>=', Carbon::now())->get();
    }

    public function getMostViewedWebinarsProperty()
    {
        return Webinar::
        where('status', 2)
        ->withCount('enrolled')
        ->orderBy('enrolled_count', 'desc')
        ->paginate(3);
    }

    public function render()
    {
        return view('livewire.participant.headline.headline-webinars-section', [
            'upcoming_webinars' => $this->upcoming_webinars,
            'most_viewed_webinars' => $this->most_viewed_webinars,
        ]);
    }
}
