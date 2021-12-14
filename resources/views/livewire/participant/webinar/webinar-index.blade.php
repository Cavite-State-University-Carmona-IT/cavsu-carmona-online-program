<div class="bg-gray-100">
    @if($user_enrolled == true)
        @livewire('participant.webinar.webinar-play', ['webinar'=>$this->webinar])
    @else
        @livewire('participant.webinar.webinar-detail', ['webinar'=>$this->webinar])
    @endif
</div>
