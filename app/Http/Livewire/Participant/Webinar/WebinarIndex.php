<?php

namespace App\Http\Livewire\Participant\Webinar;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\WebinarUser;
use App\Models\Webinar;
use Illuminate\Support\Facades\Auth;


class WebinarIndex extends Component
{
    public $user_enrolled = false;

    public function mount()
    {
        $hasEnrolled = null;
        if(Auth::user()){
            $hasEnrolled = WebinarUser::
            where('webinar_id', $this->webinar->id)
            ->where('user_id', Auth::user()->id)->first();
        }

        if($hasEnrolled) {
            $this->user_enrolled = true;
        }
    }

    public function getWebinarProperty(Request $request)
    {
        $rawTitle = $request->title;
        // $title = str_replace('-', '', $rawTitle);
        return Webinar::where('title', $rawTitle)->first();
    }

    public function render()
    {
        return view('livewire.participant.webinar.webinar-index');
    }
}
