<?php

namespace App\Http\Livewire\Participant\Webinar;

use Livewire\Component;
use App\Models\WebinarUser;
use Illuminate\Support\Facades\Auth;

class WebinarDetail extends Component
{
    public $webinar;

    public function render()
    {
        return view('livewire.participant.webinar.webinar-detail');
    }

    public function register()
    {
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
