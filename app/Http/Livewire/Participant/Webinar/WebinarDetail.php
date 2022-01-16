<?php

namespace App\Http\Livewire\Participant\Webinar;

use Livewire\Component;
use App\Models\WebinarUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class WebinarDetail extends Component
{
    public $webinar;

    public function render()
    {
        return view('livewire.participant.webinar.webinar-detail');
    }

    public function register()
    {
        if($this->webinar->is_redirect_link == true) {
            return Redirect::to($this->webinar->registration_link);
        } else {
            $data = [
                'webinar_id' => $this->webinar->id,
                'user_id' => Auth::user()->id,
            ];
            $insertData = WebinarUser::firstOrNew([
                'webinar_id'=>$this->webinar->id,
                'user_id'=>Auth::user()->id
            ]);
            $insertData->save();
            return redirect('webinar/'.$this->webinar->title);
        }
        
    }
}
