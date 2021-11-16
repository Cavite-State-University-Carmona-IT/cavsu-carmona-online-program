<?php
//Roland Elly B. Gacula 1501-00294
//Crizaldy Derain
// webinar edit and delete
namespace App\Http\Livewire\ProgramCoordinator\Webinar;

use Livewire\Component;
use Illuminate\Http\Request;


use App\Models\Webinar;

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

    public function mount(Request $request)
    {
        $this->webinar = Webinar::query()
        ->where('title', $request->name)
        ->first();

        $this->title = $this->webinar->title;
        $this->speaker = $this->webinar->speaker;
        $this->image = $this->webinar->image;
        $this->about = $this->webinar->about;
        $this->video_link = $this->webinar->video_link;
        $this->date = $this->webinar->date;
        $this->evaluation_link = $this->webinar->evaluation_link;
        $this->ecertificate_link = $this->webinar->ecertificate_link;
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

}
