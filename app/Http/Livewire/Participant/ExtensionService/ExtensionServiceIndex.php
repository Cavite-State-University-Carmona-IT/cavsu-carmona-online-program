<?php

namespace App\Http\Livewire\Participant\ExtensionService;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\ExtensionService;
use App\Models\FieldOfInterest;
use App\Models\Webinar;

class ExtensionServiceIndex extends Component
{
    public $extension_service;
    public $field_of_interest;

    public $field_of_interest_id = "";

    public $sort_by, $price_paid, $price_free;

    public function mount(Request $request)
    {
        $extension_service_link_name = $request->extension_service_link_name;
        $field_of_interest_link_name = $request->field_of_interest_link_name;

        $this->extension_service = ExtensionService::where('link_name', $extension_service_link_name)->first(); 

        if($this->extension_service){
            if($field_of_interest_link_name) {
                $this->field_of_interest = FieldOfInterest::where('link_name', $field_of_interest_link_name)->first();
                if(!$this->field_of_interest) {
                    return abort(404);
                } else {
                    $this->field_of_interest_id = $this->field_of_interest->id;
                }
            } 
        } else {
            return abort(404);
        }
    }

    public function render()
    {
        return view('livewire.participant.extension-service.extension-service-index', [
            'webinars' => $this->webinars,
            'field_of_interests' => $this->field_of_interests,
        ])
        ->layout('layouts.layout');
    }

    public function getFieldOfInterestsProperty()
    {
        return FieldOfInterest::where('extension_service_id', $this->extension_service->id)->get();
    }

    public function getWebinarsProperty()
    {
        $field_of_interest_id = $this->field_of_interest_id;
        $price_paid = $this->price_paid;
        $price_free = $this->price_free;

        if ($this->sort_by == 0) {
            $order = 'users_count';
        } elseif($this->sort_by == 1) {
            $order = 'review_count';
        } elseif($this->sort_by == 2) {
            $order = 'date';
        }

        return Webinar::query()
        ->leftJoin('field_of_interests', 'webinars.field_of_interest_id', '=', 'field_of_interests.id')
        ->leftJoin('extension_services', 'field_of_interests.extension_service_id', '=', 'extension_services.id')
        ->select('webinars.*')
        ->where('extension_services.id', $this->extension_service->id)
        ->where('webinars.status', 2)
        ->where(function ($query) use ($field_of_interest_id){
            if($field_of_interest_id != "") {
                return $query->where('webinars.field_of_interest_id', $field_of_interest_id);
            }
        })
        ->withCount('users')->withCount('review')->orderByDesc($order)
        ->where(function ($query) use ($price_free) {
            if($price_free == true) {
                return $query->where('price', 0);
            }
        })
        ->where(function ($query) use ($price_paid) {
            if($price_paid == true) {
                return $query->where('price', '>', 0);
            }
        })
        ->get();
    }

    public function updatedFieldOfInterestId()
    {
        if($this->field_of_interest_id != "") {
            $this->field_of_interest = FieldOfInterest::find($this->field_of_interest_id);
        }
        
    }
}
