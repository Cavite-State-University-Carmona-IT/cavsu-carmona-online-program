<?php

namespace App\Http\Livewire\Participant\Webinar;

use Livewire\Component;
use App\Models\Webinar;

class WebinarSuggestion extends Component
{
    public $webinar_id;

    public function render()
    {
        return view('livewire.participant.webinar.webinar-suggestion', ['webinars' => $this->webinars]);
    }

    public function getWebinarsProperty()
    {
        return Webinar::where('status', 2)
            ->where('id', '!=', $this->webinar_id)
            // ->whereDate('date', '<=', Carbon::now())
            ->orderByDesc('date')
            ->take(5)->get();
    }
}
