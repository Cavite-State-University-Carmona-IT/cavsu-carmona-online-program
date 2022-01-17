<?php

namespace App\Http\Livewire\ProgramCoordinator\Settings;

use Livewire\Component;
use App\Models\ExtensionService;
use App\Models\FieldOfInterest;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class ExtensionServiceSection extends Component
{
    use WithFileUploads;

    public $field_name;

    public $selected_field_of_interest_edit;
    public $field_of_interest_link_name, $field_of_interest_name;
    public $selected_extension_service_id, $selected_extension_service;
    public $extension_service_image, $extension_service_name, $extension_service_link_name, $extension_service_details, $extension_service_image_prev;

    public function render()
    {
        return view('livewire.program-coordinator.settings.extension-service-section', ['extension_services' => $this->extension_services]);
    }

    public function getExtensionServicesProperty()
    {
        return ExtensionService::all();
    }

    public function submitFieldOfInterest()
    {
        if($this->selected_field_of_interest_edit != null) {
            $this->validate([
                'field_of_interest_name' => 'required',
                'field_of_interest_link_name' => 'required|alpha_dash'
            ]);
        } else {
            $this->validate([
                'field_of_interest_name' => 'required|unique:field_of_interests,name',
                'field_of_interest_link_name' => 'required|alpha_dash|unique:field_of_interests,link_name'
            ]);
        }
        
        if($this->selected_field_of_interest_edit == null) {
            $this->selected_field_of_interest_edit = FieldOfInterest::firstOrNew(['name' => $this->field_of_interest_name, 'link_name' => $this->field_of_interest_link_name]); 
            $this->selected_field_of_interest_edit->extension_service_id = $this->selected_extension_service_id;
        } 
        $this->selected_field_of_interest_edit->name = $this->field_of_interest_name;
        $this->selected_field_of_interest_edit->link_name = $this->field_of_interest_link_name;
        $this->selected_field_of_interest_edit->save();
        $this->dispatchBrowserEvent('close-modal-field-of-interest');
    }

    public function deleteFieldOfInterest()
    {
        $this->dispatchBrowserEvent('close-modal-field-of-interest');
        $this->selected_field_of_interest_edit->delete();
        $this->field_of_interest_name = "";
        $this->field_of_interest_link_name = "";
    }

    public function openNewFieldOfInterest($val)
    {
        $this->selected_extension_service_id = $val;
        $this->field_of_interest_link_name = "";
        $this->field_of_interest_name = "";
        $this->selected_field_of_interest_edit = null;
        $this->dispatchBrowserEvent('open-modal-field-of-interest');
    }

    public function openFieldOfInterest($val)
    {
        $this->selected_field_of_interest_edit = FieldOfInterest::find($val);
        if($this->selected_field_of_interest_edit) {
            $this->field_of_interest_link_name = $this->selected_field_of_interest_edit->link_name;
            $this->field_of_interest_name = $this->selected_field_of_interest_edit->name;
            $this->dispatchBrowserEvent('open-modal-field-of-interest');
        }
    }

    // extension service
    public function openName($val)
    {
        $this->field_name = "name";
        $this->selected_extension_service = ExtensionService::find($val);
        $this->extension_service_name = $this->selected_extension_service->name;
        $this->closeDropdownAndOpenModal();
    }

    public function openLinkName($val)
    {
        $this->field_name = "link_name";
        $this->selected_extension_service = ExtensionService::find($val);
        $this->extension_service_link_name = $this->selected_extension_service->link_name;
        $this->closeDropdownAndOpenModal();
    }

    public function openDetails($val)
    {
        $this->field_name = "details";
        $this->selected_extension_service = ExtensionService::find($val);
        $this->extension_service_details = $this->selected_extension_service->details;
        $this->closeDropdownAndOpenModal();
    }

    public function openImage($val)
    {
        $this->field_name = "image";
        $this->selected_extension_service = ExtensionService::find($val);
        $this->extension_service_image_prev = $this->selected_extension_service->image;
        $this->closeDropdownAndOpenModal();
    }

    public function closeDropdownAndOpenModal()
    {
        $this->dispatchBrowserEvent('close-modal-dropdown-menu');
        $this->dispatchBrowserEvent('open-modal-extension-service');
    }

    public function submitExtensionService()
    {
        if($this->field_name == "name") {
            $this->validate(['extension_service_name' => 'required']);
            $this->selected_extension_service->name = $this->extension_service_name;
        } elseif($this->field_name == "link_name") {
            $this->validate(['extension_service_link_name' => 'required|alpha_dash']);
            $this->selected_extension_service->link_name = $this->extension_service_link_name;
        } elseif($this->field_name == "details") {
            $this->validate(['extension_service_details' => 'required']);
            $this->selected_extension_service->details = $this->extension_service_details;
        } elseif($this->field_name == "image") {
            $this->validate(["extension_service_image" => "required|image|mimes:jpg,png,jpeg|max:2048"]);
            // store image 
            $imageFileName = Carbon::now()->format('YmdHis.') . $this->extension_service_image->extension();
            $this->extension_service_image->storeAs('public/image/extension-services', $imageFileName);
            $this->selected_extension_service->image = $imageFileName;
        }
        $this->selected_extension_service->save();
        $this->closeDropdownAndOpenModal();
    }
}
