<?php
//Roland Elly B. Gacula 1501-00294
//Crizaldy Derain
// webinar edit and delete
namespace App\Http\Livewire\ProgramCoordinator\Webinar;

use Livewire\Component;
use Illuminate\Http\Request;


use App\Models\Webinar;
use App\Models\FieldOfInterest;
use App\Models\WebinarFieldOfInterest;

class WebinarDetails extends Component
{
    public $webinar;
    public $title;
    public $speaker;
    public $image;
    public $about;
    public $video_link;
    public $date;
    public $evaluation_link;
    public $ecertificate_link;
    public $delete;
    public $test;

    public $new_field_of_interest_id;
    public $field_of_interests;

    public function mount(Request $request)
    {
        $this->webinar = Webinar::find($request->id);
        
        $this->title = $this->webinar->title;
        $this->speaker = $this->webinar->speaker;
        $this->image = $this->webinar->image;
        $this->about = $this->webinar->about;
        $this->video_link = $this->webinar->video_link;
        $this->date = $this->webinar->date;
        $this->evaluation_link = $this->webinar->evaluation_link;
        $this->ecertificate_link = $this->webinar->ecertificate_link;
        
    }

    public function updateTitle()
    {
        $this->webinar->title = $this->title;
        $this->webinar->save();
        $this->dispatchBrowserEvent('close-modal-title');
    }

    public function updateSpeaker()
    {
        $this->webinar->speaker = $this->speaker;
        $this->webinar->save();
        $this->dispatchBrowserEvent('close-modal-speaker');
    }

    public function updateAbout()
    {
        $this->webinar->about = $this->about;
        $this->webinar->save();
        $this->dispatchBrowserEvent('close-modal-about');
    }

    public function getWebinarFieldOfInterestsProperty()
    {
        return $this->webinar->fieldOfInterests;
    }

    public function getFieldofInterestsProperty()
    {
        return FieldOfInterest::where('extension_service_id', $this->webinar->extension_service_id)->get();
    }

    public function render()
    {
        return view('livewire.program-coordinator.webinar.webinar-details')
        ->layout('layouts.layout-program-coordinator', ['menu' =>  'webinar']);
    }

    public function update()
    {
        $webinar = $this->webinar;
        $webinar->title = $this->title;
        $webinar->speaker = $this->speaker;
        $webinar->image = $this->image;
        $webinar->about = $this->about;
        $webinar->video_link = $this->video_link;
        $webinar->date = $this->date;
        $webinar->evaluation_link = $this->evaluation_link;
        $webinar->ecertificate_link = $this->ecertificate_link;
        $webinar->save();
    }
    public function delete()
    {
        $this->title = "";
        $this->speaker = "";
        $this->image = "";
        $this->about = "";
        $this->video_link = "";
        $this->date = "";
        $this->evaluation_link = "";
        $this->ecertificate_link = "";
        $this->webinar->delete();


    }

    public function insertTopic()
    {
        // $data = WebinarFieldOfInterest::firstOrNew(['webinar_id' => $this->webinar->id, 'field_of_interest_id' => $this->new_field_of_interest_id]);
        // $data->save();

        $this->webinar->fieldOfInterests()->attach($this->new_field_of_interest_id);


        $this->dispatchBrowserEvent('close-modal-insert-topic');
    }

    public function removeTopic($id)
    {
        $this->webinar->fieldOfInterests()->detach($id);
    }
}
