<?php

namespace App\Http\Livewire\ProgramCoordinator\Settings;

use Livewire\Component;
use App\Models\CompanyInformation;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class HeadlineSection extends Component
{
    use WithFileUploads;
    public $name, $address, $phone, $email, $headline_header, $headline_body;
    public $image, $image_prev = null;

    public $edit_option = false;

    public function mount()
    {
        if($this->company_information) 
        {
            $this->name = $this->company_information->name;
            $this->address = $this->company_information->address;
            $this->phone = $this->company_information->phone;
            $this->email = $this->company_information->email;
            $this->headline_header = $this->company_information->headline_header;
            $this->headline_body = $this->company_information->headline_body;
            $this->image_prev = $this->company_information->logo;
        }
        
    }

    public function render()
    {
        return view('livewire.program-coordinator.settings.headline-section', ['company_information'=>$this->company_information]);
    }

    public function getCompanyInformationProperty()
    {
        return CompanyInformation::find(1);
    }

    public function editOption()
    {
        $this->edit_option = true;
    }

    public function cancelOption()
    {
        $this->edit_option = false;
        if($this->company_information) 
        {
            $this->name = $this->company_information->name;
            $this->address = $this->company_information->address;
            $this->phone = $this->company_information->phone;
            $this->email = $this->company_information->email;
            $this->headline_header = $this->company_information->headline_header;
            $this->headline_body = $this->company_information->headline_body;
            $this->image_prev = $this->company_information->logo;
        }
    }

    public function submit()
    {
        if($this->company_information) {
            $this->validate([
                'name' => 'required|min:2|max:45',
                'phone' => 'nullable|numeric',
                'email' => 'nullable|email',
                'headline_header' => 'required|min:5|max:100',
                'headline_body' => 'required|min:10|max:255',
                'image' => 'nullable|image|max:2048|mimes:jpeg,jpg,png', // 2MB Max
            ]);
        } else {
            $this->validate([
                'name' => 'required|min:2|max:45',
                'phone' => 'nullable|numeric',
                'email' => 'nullable|email',
                'headline_header' => 'required|min:5|max:100',
                'headline_body' => 'required|min:10|max:255',
                'image' => 'required|image|max:2048|mimes:jpeg,jpg,png', // 2MB Max
            ]);
        }
       

        if(!$this->company_information) {
            CompanyInformation::truncate();
            $this->company_information = new CompanyInformation;
        } 
        if($this->image) {
            $imageFileName = Carbon::now()->format('YmdHis.') . $this->image->extension();
            $this->image->storeAs('public/image/icons', $imageFileName);
            $this->company_information->logo = $imageFileName;
        }
        $this->company_information->name = $this->name;
        $this->company_information->address = $this->address;
        $this->company_information->phone =  $this->phone;
        $this->company_information->email = $this->email;
        $this->company_information->headline_header = $this->headline_header;
        $this->company_information->headline_body = $this->headline_body;
        $this->company_information->save();
        $this->edit_option = false;
    }
}
