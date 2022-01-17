<?php

namespace App\Http\Livewire\Participant\Headline;

use Livewire\Component;
use App\Models\Webinar;
use Carbon\Carbon;
use App\Models\CompanyInformation;

class HeadlineSection extends Component
{
    public $headline_header = "", $headline_body = "";

    public function mount()
    {
        if($this->company_information) 
        {
            $this->headline_header = $this->company_information->headline_header;
            $this->headline_body = $this->company_information->headline_body;
        }
    }

    public function getCompanyInformationProperty()
    {
        return CompanyInformation::find(1);
    }

    public function getPublishedUpcomingWebinarsProperty()
    {
        return Webinar::where('status', 2)->whereDate('date', '>=', Carbon::now())->get();
    }

    public function render()
    {
        return view('livewire.participant.headline.headline-section');
    }
}
