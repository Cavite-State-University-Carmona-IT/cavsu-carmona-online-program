<div>
    @include('scripts.participant.webinar-play-section')

    @if($webinar != null)
        <div class="max-w-full mt-16">
            <div class="grid w-full grid-cols-3 pt-2">

                {{-- left panel --}}
                <div class="lg:col-span-2 col-start-1 lg:border-r-2 md:border-gray-300 p-7 bg-white col-span-3">
                    <div class="aspect-w-16 aspect-h-9">
                        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/kJQP7kiw5Fk?&controls=0&amp;" modestbranding="0" autohide="2" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                        {{-- <iframe src="https://www.youtube.com/embed/{{ $webinar->video_link }}?autoplay=1&enablejsapi=1&rel=0;modestbranding=1&showsearch=0" allowfullscreen></iframe> --}}
                        {{-- <iframe src=”https://www.youtube-nocookie.com/embed/T8GP4wHdpMk?rel=0” width=”560″ height=”315″ frameborder=”0″ allowfullscreen=”allowfullscreen”></iframe> --}}

                        {{-- <iframe scrolling="yes" src="https://www.youtube.com/embed/snTlMy80c_E?autoplay=1&enablejsapi=1&rel=0;modestbranding=1&showsearch=0" style="border: 0px none; margin-left: 0px; height: 500px; margin-top: -60px; width: 100%;"    sandbox="allow-forms allow-scripts allow-pointer-lock allow-same-origin allow-top-navigation" ></div> --}}
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/{{ $webinar->video_link }}?rel=0" frameborder="0" modestbranding="1" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <div  x-data="dataWebinarInfo()">
                        <div class="w-full pt-5 pb-3 border-b">
                            <div class="flex px-5 text-sm space-x-7 lg:space-x-10 lg:px-0">
                                <a class="font-semibold cursor-pointer tracking-wide hover:text-green-400"
                                    :class="(isOpenAbout == true) ? 'text-space-blue' : 'text-gray-500'"
                                    @click="isOpenAbout = true;
                                    isOpenObjectives = false;
                                    isOpenReviews = false;
                                    isOpenEvaluation = false;
                                    "
                                    >
                                    About
                                </a>
                                <a class="font-semibold cursor-pointer tracking-wide hover:text-green-400"
                                    :class="(isOpenReviews == true) ? 'text-space-blue' : 'text-gray-500'"
                                    @click="isOpenReviews = true;
                                    isOpenObjectives = false;
                                    isOpenAbout = false;
                                    isOpenEvaluation = false;
                                    "
                                    >
                                    Reviews
                                </a>
                                @if(!$this->webinar_user->ecertificate_link)
                                <a class="font-semibold cursor-pointer tracking-wide hover:text-green-400"
                                    :class="(isOpenEvaluation == true) ? 'text-space-blue' : 'text-gray-500'"
                                    @click="isOpenEvaluation = true;
                                    isOpenObjectives = false;
                                    isOpenAbout = false;
                                    isOpenReviews = false;
                                    "
                                    >
                                    Evaluation
                                </a>

                                @else
                                    @if($webinar->is_ecert_default == true)
                                        <a href="{{ url('generate/e-certificate/'.$webinar->id.'/'.auth()->user()->id) }}" target="_blank" class=" text-gray-500 font-semibold cursor-pointer tracking-wide hover:text-green-400">
                                            View E-Certificate
                                        </a>
                                    @else
                                        <a href="{{ $this->webinar_user->ecertificate_link }}" target="_blank" class=" text-gray-500 font-semibold cursor-pointer tracking-wide hover:text-green-400">
                                            View E-Certificate
                                        </a>
                                    @endif
                                @endif
                            </div>
                        </div>

                        {{-- about panel --}}
                        <div x-show="isOpenAbout">
                            about hehe
                        </div>

                        {{-- about panel --}}
                        <div x-show="isOpenReviews">
                            Reviews lol
                        </div>

                        {{-- about panel --}}
                        <div x-show="isOpenEvaluation">
                            @if($webinar->evaluation_link && $this->webinar_user->date_completed != null)
                                <div class="">
                                    <a href="{{ $webinar->evaluation_link }}" target="_blank">Click Me!</a>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>

                {{-- right panel --}}
                <div class="lg:col-span-1 p-2 col-span-3">
                    @livewire('participant.webinar.webinar-suggestion')
                </div>
            </div>
        </div>
    @else
        {{-- component 404 not found --}}
        <div class="pt-32">
            404 NOT FOUND
        </div>
    @endif
</div>
