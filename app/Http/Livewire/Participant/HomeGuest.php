<?php

namespace App\Http\Livewire\Participant;

use Livewire\Component;
use App\Models\Department;

class HomeGuest extends Component
{
    public $navSearchBar;
    public $departments;

    public function mount()
    {
        $this->departments = Department::all();
    }
    public function render()
    {
        return view('livewire.participant.home-guest')
        ->layout('layouts.guest', ['header' => 'Post Compoent Page']);
    }

}