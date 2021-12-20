<?php

namespace App\Http\Livewire\ProgramCoordinator\Webinar;

use Livewire\Component;

use App\Models\Webinar;
use Livewire\WithPagination;

class WebinarIndex extends Component
{
    public $search = "";
    public $status = 0;
    public $totalWebinars;
    public $perPage = 5;


    public function render()
    {
        return view('livewire.program-coordinator.webinar.webinar-index', ['webinars'=>$this->webinars])
        // ->layout('layouts.layout-program-coordinator', ['menu' =>  'webinar']);
        ->layout('layouts.app');
    }

    public function getWebinarsProperty()
    {
        $search = $this->search;
        $status = $this->status;

        $data = Webinar::query()
        ->where(function ($query) use ($search) {
            return $query->where('title', 'like', '%'. $search .'%')
                ->orWhere('speaker', 'like', '%'. $search .'%');
        })
        ->where(function ($query) use ($status) {
            if($status != 0) {
                return $query->where('status', $status);
            }
        })
        ->paginate($this->perPage);

        return $data;
    }
}
