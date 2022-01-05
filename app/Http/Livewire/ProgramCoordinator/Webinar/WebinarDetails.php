<?php
namespace App\Http\Livewire\ProgramCoordinator\Webinar;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

use App\Models\Webinar;
use App\Models\FieldOfInterest;
use App\Models\WebinarFieldOfInterest;
use App\Models\EcertificateTemplate;
use App\Models\EcertificateTemplateWebinar;

class WebinarDetails extends Component
{
    use WithFileUploads;
    public $webinar;
    public $title;
    public $speaker;
    public $image;
    public $price;
    public $about;
    public $status;
    public $video_link;
    public $date;
    public $evaluation_link;
    public $ecertificate_link;
    public $delete;

    public $ecert_image;
    public $ecertificate_id;
    public $ecertificate_templates;
    public $ecertificate_template_id;

    public $new_field_of_interest_id;
    public $field_of_interests;

    public function mount(Request $request)
    {
        $this->webinar = Webinar::find($request->id);
        
        $this->title = $this->webinar->title;
        $this->speaker = $this->webinar->speaker;
        $this->about = $this->webinar->about;
        $this->price = $this->webinar->price;
        $this->status = $this->webinar->status;
        $this->video_link = $this->webinar->video_link;
        $this->date = $this->webinar->date;
        $this->evaluation_link = $this->webinar->evaluation_link;
        $this->ecertificate_link = $this->webinar->ecertificate_link;

        if($this->webinar->is_ecert_default == true) {
            $ecertificate_template = EcertificateTemplateWebinar::where('webinar_id', $this->webinar->id)->latest()->first();
            if($ecertificate_template)
            {
                $ecert_template = EcertificateTemplate::find($ecertificate_template->ecertificate_template_id);
                $this->ecertificate_id = $ecert_template->id;
            } else {
                $this->ecert_image = "none.jpg";
                $this->ecertificate_id = 1;
            }
        } else {
            $this->ecertificate_id = null;
        }

        $this->ecertificate_templates = EcertificateTemplate::all();
    }

    public function updateDate()
    {
        $this->webinar->date = $this->date;
        $this->webinar->save();
        $this->dispatchBrowserEvent('close-modal-date');
    }

    public function updatePrice()
    {
        $this->webinar->price = $this->price;
        $this->webinar->save();
        $this->dispatchBrowserEvent('close-modal-price');
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

    public function updateStatus()
    {
        $this->validate([
            'status' => 'required', // 1MB Max
        ]);
        $this->webinar->status = $this->status;
        $this->webinar->save();
        $this->dispatchBrowserEvent('close-modal-status');
    }

    public function updateVideoLink()
    {
        $this->webinar->video_link = $this->video_link;
        $this->webinar->save();
        $this->dispatchBrowserEvent('close-modal-video-link');
    }

    public function updateEvalLink()
    {
        $this->webinar->evaluation_link = $this->evaluation_link;
        $this->webinar->save();
        $this->dispatchBrowserEvent('close-modal-eval-link');
    }

    public function updateEcert()
    {
        
        // $this->validate([
        //     'ecert_template' => 'nullable|image|max:2048|mimes:jpeg,jpg,png', // 1MB Max
        // ]);

        // $this->webinar->ecertificate_link = $this->ecertificate_link;

        // if($this->ecert_template)
        // {
        //     $property = EcertificateProperty::firstOrNew(['background_template' => $this->ecert_template->getClientOriginalName(), 'name' => $this->ecert_css_name, 'date' => $this->ecert_css_date]);
        //     $property->save();
            
        //     $this->ecert_template->storeAs('public/image/template/ecertificate', $this->ecert_template->getClientOriginalName());
            
        //     $this->webinar->ecertificate_property_id = $property->id;
        // }
        if($this->ecertificate_link == ""){
            $this->validate([
                'ecertificate_template_id' => 'required', // 2MB Max
            ]);
            $this->webinar->is_ecert_default = true;
            $this->webinar->ecertificate_link = "";
            $data = EcertificateTemplateWebinar::firstOrNew(['webinar_id' => $this->webinar->id, 'ecertificate_template_id' => $this->ecertificate_template_id]);
            $data->save();

            $this->ecertificate_id = $this->ecertificate_template_id;
        }
        else {
            $this->webinar->is_ecert_default = false;
            $this->webinar->ecertificate_link = $this->ecertificate_link;
            $this->ecertificate_id = null;
        }
        $this->webinar->save();
        
        $this->dispatchBrowserEvent('close-modal-ecert-edit');
    }

    public function updateImage()
    {
        $this->validate([
            'image' => 'required|image|max:2048|mimes:jpeg,jpg,png', // 2MB Max
        ]);
        $this->webinar->image = $this->image->getClientOriginalName();
        $this->webinar->save();

        $this->image->storeAs('public/image/webinars', $this->image->getClientOriginalName());

        $this->dispatchBrowserEvent('close-modal-image');
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

    public function insertTopic()
    {
        $this->webinar->fieldOfInterests()->syncWithoutDetaching($this->new_field_of_interest_id);
        $this->dispatchBrowserEvent('close-modal-insert-topic');
    }

    public function removeTopic($id)
    {
        $this->webinar->fieldOfInterests()->detach($id);
    }

    public function delete()
    {
        $this->webinar->delete();
        return redirect()->route('program-coordinator.webinar');
    }
}
