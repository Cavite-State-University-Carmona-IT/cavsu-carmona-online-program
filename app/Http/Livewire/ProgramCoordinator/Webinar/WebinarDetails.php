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
    public $registration_link;
    public $webinar_link;
    public $delete;

    public $ecert_image;
    public $ecertificate_id;
    public $ecertificate_templates;
    public $ecertificate_template_id;

    public $new_field_of_interest_id;
    public $field_of_interests;

    public $edit_option = false, $ecert_option, $redirect_registration_option;

    public function mount(Request $request)
    {
        $this->webinar = Webinar::find($request->id);
        
        if($this->webinar) {
            $this->title = $this->webinar->title;
            $this->speaker = $this->webinar->speaker;
            $this->about = $this->webinar->about;
            $this->price = $this->webinar->price;
            $this->status = $this->webinar->status;
            $this->video_link = $this->webinar->video_link;
            $this->date = $this->webinar->date;
            $this->evaluation_link = $this->webinar->evaluation_link;
            $this->ecertificate_link = $this->webinar->ecertificate_link;
            $this->registration_link = $this->webinar->registration_link;
            $this->webinar_link = $this->webinar->webinar_link;

            if($this->webinar->is_ecert_default == true) {
                $ecertificate_template = EcertificateTemplateWebinar::where('webinar_id', $this->webinar->id)->latest()->first();
                if($ecertificate_template)
                {
                    $ecert_template = EcertificateTemplate::find($ecertificate_template->ecertificate_template_id);
                    $this->ecertificate_id = $ecert_template->id;
                } 
            } else {
                $this->ecertificate_id = null;
            }

            $this->ecertificate_templates = EcertificateTemplate::all();

            $this->ecert_option = $this->webinar->is_ecert_default;
            $this->redirect_registration_option = $this->webinar->is_redirect_link;
        } else {
            return abort(404);
        }
        
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

    public function updateLinks()
    {
        $this->webinar->video_link = $this->video_link;
        $this->webinar->evaluation_link = $this->evaluation_link;
        $this->webinar->registration_link = $this->registration_link;
        $this->webinar->webinar_link = $this->webinar_link;
        $this->webinar->is_redirect_link = $this->redirect_registration_option;

        if($this->ecert_option == false) {
            $this->webinar->ecertificate_link = $this->ecertificate_link;
        }

        $this->webinar->save();

        // save first before sync or attach
        if($this->ecert_option == true) {
            $this->webinar->ecertificateTemplates()->sync($this->ecertificate_id);
        }

        $this->edit_option = false;
    }

    public function closeEdit()
    {
        $this->edit_option = false;
    }

    public function getWebinarFieldOfInterestsProperty()
    {
        return $this->webinar->fieldOfInterests;
    }

    public function getFieldofInterestsProperty()
    {
        return FieldOfInterest::where('extension_service_id', $this->webinar->extension_service_id)->get();
    }

    public function editOption()
    {
        $this->edit_option = true;
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
