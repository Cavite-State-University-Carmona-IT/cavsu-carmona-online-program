<?php

namespace App\Http\Livewire\Participant\Search;

use Livewire\Component;
use Illuminate\Http\Request;

class SearchPage extends Component
{
    public $searchValue;

    public function mount(Request $request)
    {
        $this->searchValue = $request->q;
    }

    public function render()
    {
        return view('livewire.participant.search.search-page');
    }
}
