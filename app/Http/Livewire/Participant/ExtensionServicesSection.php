<?php

namespace App\Http\Livewire\Participant;

use Livewire\Component;
use App\Models\ExtensionService;

class ExtensionServicesSection extends Component
{
    
    public function render()
    {
        return view('livewire.participant.extension-services-section', ['extension_services' => $this->extension_services]);
    }

    public function getExtensionServicesProperty()
    {
        return ExtensionService::all();
    }
}
