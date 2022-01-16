<?php

namespace App\Http\Livewire\Participant;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\Webinar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Resources;

class SearchDropdown extends Component
{
    public $search = '';


    public function render()
    {
       $searchResults = [];
       $search = $this->search;
        if (strlen($this->search) >= 2) {
            $searchResults = Webinar::query()
            ->where('status', 2)
            ->where(function ($query) use ($search) {
                return $query->where('title', 'like', '%'. $search .'%');
            }) ->take(7)
                ->get();
                // ->json()['results'];
        }
         //dump($searchResults);

        return view('livewire.participant.search-dropdown', [
            'searchResults' =>  $searchResults,
            // 'searchResults' => collect ($searchResults)->take(7),
        ]);
    }

    public function querySearch()
    {
        return redirect()->route('webinarsearch', ['q' => $this->search]);
    }

    public function resetSearch()
    {
        $this->search = '';
    }
}
