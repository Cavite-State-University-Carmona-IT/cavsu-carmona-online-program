<?php

namespace App\Http\Livewire\ProgramCoordinator\Webinar;

use Livewire\Component;

use App\Models\Webinar;

class WebinarIndex extends Component
{
    public $search = "";

    public $btnIs = "";
    public $btnName = "see more";
    public $totalWebinars;
    public $perPage = 6;

    public function mount()
    {
        $this->hideBtn();
    }

    public function render()
    {
        return view('livewire.program-coordinator.webinar.webinar-index', ['webinars'=>$this->webinars])
        ->layout('layouts.layout-program-coordinator', ['menu' =>  'webinar']);
    }

    public function getWebinarsProperty()
    {
        $search = $this->search;

        $data = Webinar::query()
        ->where(function ($query) use ($search) {
            return $query->where('title', 'like', '%'. $search .'%')
                ->orWhere('speaker', 'like', '%'. $search .'%');
        })
        ->take($this->perPage)
        ->get();

        return $data;
    }

    public function seeMore()
    {
        if($this->btnName == "see more")
        {
            $this->perPage += 3;
            if($this->perPage > $this->webinars->count()){
                $this->btnName = "see less";
            } else {
                $this->btnName = "see more";
            }
        } else {
            $this->perPage = 6;
            $this->btnName = "see more";

        }

        $this->mount();
    }

    public function hideBtn(){

        $this->totalWebinars = $this->webinars->count();

        if($this->totalWebinars < 6){
            $this->btnIs = "hidden";
        }else
        {
            $this->btnIs = "show";
        }
    }

    public function updatedSearch()
    {
        $this->hideBtn();
    }



}
