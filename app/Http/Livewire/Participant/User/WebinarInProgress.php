<?php

namespace App\Http\Livewire\Participant\User;

use Livewire\Component;
use App\Models\Webinar;
use App\Models\ExtensionService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WebinarInProgress extends Component
{
    public $btnIs = "";
    public $totalWebinars;
    public $limitIsActive = true;
    public $progressWebinars;
    public $extensionServiceName;
    public $buttonName = "See All";

    public function mount()
    {
        $this->progressWebinars = Webinar::query()
        ->join('webinar_users', function($join) {
            $join->on('webinars.id', '=', 'webinar_users.webinar_id')
                ->where('webinar_users.date_completed' , null)
                
                ->where('webinar_users.user_id' , Auth::user()->id);
        })
        ->select('webinars.*' )
        ->get();

        $this->extensionServiceName = DB::select("select * from extension_services");
        
        $this->hideBtn();
    }


    public function seeAll(){
        $this->limitIsActive = !$this->limitIsActive;
        
        if($this->buttonName == "See All"){
            $this->buttonName = "Less";
        }else
        {
            $this->buttonName = "See All";
        }

        $this->mount();
        

    }

    public function hideBtn(){

        $this->totalWebinars = $this->progressWebinars->count();

        if($this->totalWebinars <= 8){
            $this->btnIs = "hidden";
        }else
        {
            $this->btnIs = "show";
        }
    }

    public function render()
    {
        return view('livewire.participant.user.webinar-in-progress');
    }
}
