<?php

namespace App\Http\Livewire\Participant\ExtensionService;

use Livewire\Component;
use Illuminate\Http\Request;

class ExtensionServiceIndex extends Component
{
    public $extension_service_name;
    public $field_of_interest_name;

    public function mount(Request $request)
    {
        // $this->webinar = ExtensionService::query()
        // ->where('title', $request->name)
        // ->first();
        $this->extension_service_name = $request->name;
        $this->field_of_interest_name = $request->fieldofinterest;
    }
    public function render()
    {
        return view('livewire.participant.extension-service.extension-service-index')
        ->layout('layouts.layout');
    }
}
