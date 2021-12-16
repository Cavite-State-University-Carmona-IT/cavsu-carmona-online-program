<?php

namespace App\Http\Livewire\Participant\Webinar;

use Livewire\Component;
use App\Models\WebinarUser;
use Illuminate\Support\Facades\Auth;

class WebinarPlay extends Component
{
    public $webinar;

    public function getWebinarUserProperty()
    {
        return WebinarUser::where('webinar_id', $this->webinar->id)->where('user_id', Auth::user()->id)->first();
    }

    public function render()
    {
        return view('livewire.participant.webinar.webinar-play');
    }
}
