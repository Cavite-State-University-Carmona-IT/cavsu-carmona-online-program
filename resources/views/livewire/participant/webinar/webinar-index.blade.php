<div class="bg-white">
    @if($user_enrolled == true)
        @livewire('participant.webinar.webinar-play', ['webinar'=>$this->webinar])
    @else
        @livewire('participant.webinar.webinar-detail', ['webinar'=>$this->webinar])
    @endif
</div>
