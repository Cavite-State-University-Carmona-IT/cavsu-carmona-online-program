<?php

namespace App\Http\Livewire\ProgramCoordinator\Settings;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\EcertificateTemplate;

class EcertificateTemplateSection extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'simple-tailwind';

    public $image, $image_prev;
    public $name, $css_name, $css_title, $css_date;
    public $search;
    public $selected_ecert;

    public function getEcertificateTemplatesProperty()
    {
        $search = $this->search;
        return EcertificateTemplate::where(function ($query) use ($search) {
            return $query->where('name', 'like', '%'. $search .'%');
        })
        ->paginate(5);
    }

    public function render()
    {
        return view('livewire.program-coordinator.settings.ecertificate-template-section', ['ecertificate_templates'=>$this->ecertificate_templates]);
    }

    public function openModal()
    {
        $this->closingModal();
        $this->dispatchBrowserEvent('open-modal');
    }

    public function openEditModal($val)
    {
        $this->selected_ecert = EcertificateTemplate::find($val);
        if($this->selected_ecert)
        {
            $this->name = $this->selected_ecert->name;
            $this->css_title = $this->selected_ecert->css_title;
            $this->css_name = $this->selected_ecert->css_name;
            $this->css_date = $this->selected_ecert->css_date;
            $this->image_prev = $this->selected_ecert->image;
            $this->dispatchBrowserEvent('open-modal');
        }
    }

    public function submit()
    {
        if(!$this->selected_ecert) {
            $this->validate([
                'name' => 'required|unique:ecertificate_templates,name|max:100',
                'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
                'css_title' => 'required',
                'css_name' => 'required',
                'css_date' => 'required',
            ]);
        } else {
            $this->validate([
                'name' => 'required|max:100',
                'css_title' => 'required',
                'css_name' => 'required',
                'css_date' => 'required',
            ]);
        }
        
        if(!$this->selected_ecert) {
            $this->selected_ecert = new EcertificateTemplate;
        } 
        if($this->image) {
            $imageFileName = Carbon::now()->format('YmdHis.') . $this->image->extension();
            $this->image->storeAs('public/image/template/ecertificate', $imageFileName);
            $this->selected_ecert->image = $imageFileName;
        }

        $this->selected_ecert->name = $this->name;
        $this->selected_ecert->css_title = $this->css_title;
        $this->selected_ecert->css_name = $this->css_name;
        $this->selected_ecert->css_date = $this->css_date;
        $this->selected_ecert->save();
        $this->dispatchBrowserEvent('close-modal');
        $this->closingModal();
    }

    public function closingModal()
    {
        $this->selected_ecert = null;
        $this->name = "";
        $this->css_title = "";
        $this->css_name = "";
        $this->css_date = "";
        $this->image_prev = "";
        $this->image = "";
    }
}
