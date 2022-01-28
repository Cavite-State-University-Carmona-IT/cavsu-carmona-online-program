<?php

namespace App\Http\Livewire\Partial;

use Livewire\Component;
use App\Models\ExtensionService;

class ExtensionServiceDropdownSection extends Component
{
    public function render()
    {
        return view('livewire.partial.extension-service-dropdown-section', ['extension_services' => $this->extension_services]);
    }

    public function getExtensionServicesProperty()
    {
        return ExtensionService::all();
    }

}
