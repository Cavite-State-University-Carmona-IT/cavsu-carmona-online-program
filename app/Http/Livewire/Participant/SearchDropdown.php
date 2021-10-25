<?php

namespace App\Http\Livewire\Participant;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\Webinar;
use Illuminate\Database\Seeder;

class SearchDropdown extends Component
{
    public $search = ''; 


    public function render()
    {
       $searchResults = [];
        
        if (strlen($this->search) >= 2) {
            $searchResults = Http::withToken(config('services.run'))
                ->get('webinar'.$this->search)
                ->json()['results'];
        }
         //dump($searchResults);

        return view('livewire.participant.search-dropdown', [
            'searchResults' => collect ($searchResults)->take(7),
        ]);
    }
}
