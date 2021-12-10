<?php

namespace App\Http\Livewire\Participant;

use Livewire\Component;
use App\Models\FieldOfInterest;

class CategoriesSection extends Component
{
    public $ext1, $ext2, $ext3, $ext4, $ext5;

    public function mount()
    {
        $this->ext1 = Self::fieldOfInterestData(1);
        $this->ext2 = Self::fieldOfInterestData(2);
        $this->ext3 = Self::fieldOfInterestData(3);
        $this->ext4 = Self::fieldOfInterestData(4);
        $this->ext5 = Self::fieldOfInterestData(5);
    }

    public function render()
    {
        return view('livewire.participant.categories-section');
    }

    public function fieldOfInterestData($id)
    {
        return FieldOfInterest::where('extension_service_id', $id)->get();
    }
}
