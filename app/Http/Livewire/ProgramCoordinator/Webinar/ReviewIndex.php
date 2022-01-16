<?php

namespace App\Http\Livewire\ProgramCoordinator\Webinar;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\WebinarUserReview;

class ReviewIndex extends Component
{
    public $webinar_id;
    public $sortBy = "0", $rating = "all";

    public function mount(Request $request) 
    {
        $this->webinar_id = $request->id;
    }

    public function getReviewsProperty()
    {
        $sortBy = $this->sortBy;
        $rating = $this->rating;
        return WebinarUserReview::where('webinar_id', $this->webinar_id)
        ->where(function($query) use ($rating) {
            if($rating != "all") {
                return $query->where('rate', $rating);
            }
        })
        // ->where(function($query) use ($sortBy) {
        //     if($sortBy == "0") {
        //         return $query->orderBy('updated_at','DESC');
        //     } else {
        //         return $query->orderBy('updated_at','ASC');
        //     }
        // })
        ->get();
    }

    public function render()
    {
        return view('livewire.program-coordinator.webinar.review-index', ['reviews' => $this->reviews]);
    }
}
