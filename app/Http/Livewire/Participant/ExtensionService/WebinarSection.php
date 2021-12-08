<?php

namespace App\Http\Livewire\Participant\ExtensionService;

use Livewire\Component;
use App\Models\Webinar;
use App\Models\ExtensionService;

class WebinarSection extends Component
{
    public $extension_service_name;
    public $extension_service;

    public function mount()
    {
        $str_ext = str_replace("-"," ",$this->extension_service_name);
        $this->extension_service = ExtensionService::where('name', $str_ext)->first();
    }
    public function getPublishedWebinarsProperty()
    {
        return Webinar::where('extension_service_id', $this->extension_service->id)
        // return Webinar::where('extension_service_id', 1)
        ->where('status', 2)
        ->get();
    }

    public function render()
    {
        return view('livewire.participant.extension-service.webinar-section',['published_webinars' => $this->published_webinars]);
    }
}
