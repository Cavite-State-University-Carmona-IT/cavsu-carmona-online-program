<?php

namespace App\Http\Livewire\ProgramCoordinator\Webinar;

use Livewire\Component;
use Illuminate\Http\Request;

use App\Models\Webinar;

class WebinarDetails extends Component
{
    public $webinar;
    public $title;
    public $test;

    public function mount(Request $request)
    {
        $this->webinar = Webinar::query()
        ->where('title', $request->name)
        ->first();

        $this->title = $this->webinar->title;
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
        $webinar->save();
    }


}
