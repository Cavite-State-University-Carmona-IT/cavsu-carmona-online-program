<?php

namespace App\Http\Livewire\Participant\Webinar;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\WebinarUserReview;
use Illuminate\Support\Facades\Auth;
use App\Models\ReviewUser;

class WebinarReview extends Component
{
    public $webinar_id, $user_review;
    public $sortBy = "0", $rating = "all";

    public $rate, $comment_title, $comment_body;

    public function mount($webinar_id) 
    {
        $this->webinar_id = $webinar_id;
        $this->user_review = WebinarUserReview::firstOrNew(['webinar_id' => $this->webinar_id, 'user_id' => Auth::user()->id]);
        
        if($this->user_review) {
            $this->comment_title = $this->user_review->comment_title;
            $this->comment_body = $this->user_review->comment_body;
            $this->rate = $this->user_review->rate;
        }
        
    }

    public function getReviewsProperty()
    {
        $sortBy = $this->sortBy;
        $rating = $this->rating;
        $data = WebinarUserReview::query()
        ->where('webinar_id', $this->webinar_id)
        ->where(function($query) use ($rating) {
            if($rating != "all") {
                return $query->where('rate', $rating);
            }
        })
        ->get();
        
        return $data;
    }

    public function render()
    {
        return view('livewire.participant.webinar.webinar-review', ['reviews'=> $this->reviews]);
    }

    public function submit()
    {
        $this->validate([
            'rate' => 'required', 
        ]);
        
        $this->user_review->webinar_id = $this->webinar_id;
        $this->user_review->user_id = Auth::user()->id;
        $this->user_review->comment_title = $this->comment_title;
        $this->user_review->comment_body = $this->comment_body;
        $this->user_review->rate = $this->rate;
        $this->user_review->save();

        $this->dispatchBrowserEvent('close-modal-review');

    }

    public function like_comment($id)
    {
        $data = ReviewUser::firstOrNew(['webinar_user_review_id'=>$id, 'user_id'=>Auth::user()->id]);
        $data->like = true;
        $data->save();
    }

    public function dislike_comment($id)
    {
        $data = ReviewUser::firstOrNew(['webinar_user_review_id'=>$id, 'user_id'=>Auth::user()->id]);
        $data->like = false;
        $data->save();
    }
}
