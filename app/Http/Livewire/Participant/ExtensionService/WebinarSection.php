<?php

namespace App\Http\Livewire\Participant\ExtensionService;

use Livewire\Component;
use App\Models\Webinar;
use App\Models\ExtensionService;
use App\Models\FieldOfInterest;

use Illuminate\Support\Facades\DB;

class WebinarSection extends Component
{
    public $extension_service_name;
    public $extension_service;

    public $sort_by = 0, $ratings = 4, $price_paid, $price_free;

    public $selected_topic_id, $topic_ids = [], $selected_topics = [];

    public function mount()
    {
        $str_ext = str_replace("-"," ",$this->extension_service_name);
        $this->extension_service = ExtensionService::where('name', $str_ext)->first();
    }

    public function addTopic()
    {
        $this->validate([
            'selected_topic_id' => 'required', 
        ]);
        
        $this->topic_ids[] = $this->selected_topic_id;
        $this->selected_topics = FieldOfInterest::findMany($this->topic_ids);
        // $this->dispatchBrowserEvent('close-modal-add-topic');

    }

    public function removeTopic($topic_id)
    {
        $this->topic_ids = array_diff($this->topic_ids, array($topic_id));
        $this->selected_topics = FieldOfInterest::findMany($this->topic_ids);
    }

    public function getFieldOfInterestsProperty()
    {
        return FieldOfInterest::where('extension_service_id', $this->extension_service->id)->get();
    }

    public function getPublishedWebinarsProperty()
    {
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
        ->leftjoin('field_of_interests', 'webinars.field_of_interest_id', '=', 'field_of_interests.id')
        ->where('webinars.status', 2)
        ->where('field_of_interests.extension_service_id', $this->extension_service->id)
        // ->withCount('users')->withCount('review')->orderByDesc($order)
        // ->where(function ($query) use ($price_free) {
        //     if($price_free == true) {
        //         return $query->where('price', 0);
        //     }
        // })
        // ->where(function ($query) use ($price_paid) {
        //     if($price_paid == true) {
        //         return $query->where('price', '>', 0);
        //     }
        // })
        ->select('webinars.*', 'field_of_interests.extension_service_id')
        ->get();
        

    }

    public function render()
    {
        return view('livewire.participant.extension-service.webinar-section',
            [
                'published_webinars' => $this->published_webinars,
                'field_of_interests' => $this->field_of_interests,
            ]);
    }
}
