<?php

namespace App\Http\Livewire\Participant;

use Livewire\Component;
use App\Models\ExtensionService;

class ExtensionServicesSection extends Component
{
    public $ext1, $ext2, $ext3, $ext4, $ext5;

    public function mount()
    {
        $this->ext1 = $this->extValue(1);
        $this->ext2 = $this->extValue(2);
        $this->ext3 = $this->extValue(3);
        $this->ext4 = $this->extValue(4);
        $this->ext5 = $this->extValue(5);
    }

    public function render()
    {
        return view('livewire.participant.extension-services-section');
    }

    public function extValue($id)
    {
        return ExtensionService::find($id);
    }
}
