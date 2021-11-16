<?php

namespace App\Http\Livewire\ProgramCoordinator\Webinar;

use Livewire\Component;
use App\Models\Webinar;

class WebinarCreate extends Component
{
    public $title, $speaker, $video_link, $date;
    public $status = 1;

    public function mount()
    {

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
