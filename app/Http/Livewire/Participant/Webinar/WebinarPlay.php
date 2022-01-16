<?php

namespace App\Http\Livewire\Participant\Webinar;

use Livewire\Component;
use App\Models\WebinarUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class WebinarPlay extends Component
{
    public $webinar;

    public function mount()
    {
        if($this->webinar->is_redirect_link == true) 
        {
            return Redirect::to($this->webinar->webinar_link);
        }
    }

    public function getWebinarUserProperty()
    {
        return WebinarUser::where('webinar_id', $this->webinar->id)->where('user_id', Auth::user()->id)->first();
    }

    public function render()
    {
        return view('livewire.participant.webinar.webinar-play');
    }
}
