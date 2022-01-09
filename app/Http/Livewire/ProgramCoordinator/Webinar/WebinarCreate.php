<?php

namespace App\Http\Livewire\ProgramCoordinator\Webinar;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Webinar;
use App\Models\ExtensionService;
use App\Models\FieldOfInterest;
use App\Models\EcertificateTemplate;

use Livewire\WithFileUploads;
use Carbon\Carbon;


class WebinarCreate extends Component
{
    use WithFileUploads;
    public $extension_service, $title, $speaker, $about, $price, $status, $date, $duration, $image;
    public $video_link, $evaluation_link, $ecertificate_link, $registration_link, $webinar_link;
    public $extension_services, $ecertificate_templates, $field_of_interests = [];
    public $extension_service_image = 'none.jpg';

    public $ecert_option = true, $redirect_registration_option = true;

    public $selected_ecert_template;
    public $selected_topic_id, $topic_ids = [], $selected_topics = [];

    public function mount()
    {
        $this->extension_services = ExtensionService::all();
        $this->ecertificate_templates = EcertificateTemplate::all();
    }

    public function updatedExtensionService()
    {
        $data = $this->extension_services->where('id', $this->extension_service)->first();
        if($data) {
            // change extension service image
            $this->extension_service_image = $data->image;

            // field of topics
            $this->field_of_interests = FieldOfInterest::where('extension_service_id', $data->id)->get();

        } else {
            $this->extension_service_image = 'none.jpg';
            $this->field_of_interests = [];
        }
        $this->topic_ids = [];
        $this->selected_topics = null;
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

    public function submit()
    {
        $this->validate([
            "title" => "required|unique:webinars,title",
            "extension_service" => "required|numeric", 
            "speaker" => "required", 
            "about" => "required", 
            "status" => "required|numeric", 
            "date" => "required|date", 
            "duration" => "nullable|numeric", 
            "image" => "required|image|mimes:jpg,png,jpeg|max:2048",//2mb 
            "topic_ids" => "required|array|min:1",
            "topic_ids.*" => "required|numeric",
            "video_link" => "required_if:redirect_registration_option,false", 
            "evaluation_link" => "required", 
            "registration_link" => "required_if:redirect_registration_option,true",
            "webinar_link" => "required_if:redirect_registration_option,true",
            "ecertificate_link" => "required_if:ecert_option,false",
            "selected_ecert_template" => "required_if:ecert_option,true",
        ]);

        // store image 
        $imageFileName = Carbon::now()->format('YmdHis.') . $this->image->extension();

        $this->image->storeAs('public/image/webinars', $imageFileName);


        $data = Webinar::firstOrNew(['title'=> $this->title]);
        $data->extension_service_id = $this->extension_service;
        $data->speaker = $this->speaker;
        $data->about = $this->about;
        $data->status = $this->status;
        $data->date = $this->date;
        $data->duration = $this->duration;
        $data->image = $imageFileName;
        $data->date = $this->date;
        $data->video_link = $this->video_link;
        $data->evaluation_link = $this->evaluation_link;
        $data->registration_link = $this->registration_link;
        $data->webinar_link = $this->webinar_link;
        $data->is_redirect_link = $this->redirect_registration_option;
        $data->is_ecert_default = $this->ecert_option;

        if($this->ecert_option == false) {
            $data->ecertificate_link = $this->ecertificate_link;
        }
        $data->created_by = Auth::user()->id;
        $data->save();

        // save first before sync or attach
        if($this->ecert_option == true) {
            $data->ecertificateTemplates()->sync($this->selected_ecert_template);
        }
        $data->fieldOfInterests()->sync($this->topic_ids);

        return redirect('program-coordinator/webinar/'.$data->id);
    }

    public function render()
    {
        return view('livewire.program-coordinator.webinar.webinar-create')
        ->layout('layouts.layout-program-coordinator', ['menu' =>  'webinar']);
    }

    public function save()
    {
        $webinar = Webinar::firstOrNew(['title'=>$this->title]);
        $webinar->speaker = $this->speaker;
        $webinar->save();
    }
}
