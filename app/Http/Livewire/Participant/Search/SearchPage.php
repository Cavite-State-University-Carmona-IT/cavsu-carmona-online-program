<?php

namespace App\Http\Livewire\Participant\Search;

use Livewire\Component;

class SearchPage extends Component
{
    public $q;

    public function mount()
    {
        $this->search = $this->q;
    }

    public function render()
    {
        return view('livewire.participant.search.search-page');
    }
}
