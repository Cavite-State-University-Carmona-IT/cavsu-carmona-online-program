<?php

namespace App\Http\Livewire\Participant;

use Livewire\Component;
use App\Models\FieldOfInterest;

class CategoriesSection extends Component
{
    public $fieldOfInterests;

    public function mount()
    {
        $this->fieldOfInterests = FieldOfInterest::where('extension_service_id', 1)->get();
    }

    public function render()
    {
        return view('livewire.participant.categories-section');
    }

    public function changeSubCategories($id)
    {
        $this->fieldOfInterests = FieldOfInterest::where('extension_service_id', $id)->get();
    }
}
