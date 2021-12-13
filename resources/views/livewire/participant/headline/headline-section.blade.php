<div class="w-full">
    <section class="relative flex items-center h-screen pt-16 header" style="max-height: 860px;">
        <div class="container z-30 flex flex-wrap items-center mx-auto">
            <div class="w-full px-4 md:w-8/12 lg:w-6/12 xl:w-6/12">

                @if(auth()->check())
                    <div class="pt-0 md:pt-32">
                        @livewire('participant.headline.headline-webinars-section')
                    </div>
                @else
                    <div class="pt-32 sm:pt-0">
                        <p class="text-2xl font-semibold md:text-4xl text-blueGray-600">
                            Cavite State University<br>
                            Extension Services
                        </p>
                        <p class="mt-4 text-base leading-relaxed md:text-lg text-blueGray-500">
                            CavSU is a web-based platform that offers free Open Online Learning such as short courses and webinars from Instructors and Professors of Cavite State University.
                        </p>
                        <div class="inline-flex mt-12" wire:poll>
                            <a class="px-6 py-4 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear bg-green-500 rounded-sm shadow outline-none whitespace-nowrap get-started focus:outline-none active:bg-green-600 hover:bg-gray-200 hover:text-gray-500" href="{{ route('register') }}">
                                Register <span class="sm:hidden">for Free</span>
                            </a>
                            @if($this->publishedUpcomingWebinars->count() > 0)
                            <a class="px-6 py-4 mb-1 ml-1 mr-1 text-sm font-bold text-gray-100 uppercase rounded-sm shadow outline-none bg-light-space-blue whitespace-nowrap focus:outline-none active:bg-gray-600 hover:text-gray-500 hover:bg-gray-200" href="#upcoming_webinars">
                                <span class="sm:hidden">See </span>Upcoming webinars
                            </a>
                            @else
                            <a class="px-6 py-4 mb-1 ml-1 mr-1 text-sm font-bold text-gray-100 uppercase rounded-sm shadow outline-none bg-light-space-blue whitespace-nowrap focus:outline-none active:bg-gray-600 hover:text-gray-500 hover:bg-gray-200" href="#upcoming_webinars">
                                <span class="sm:hidden">See </span>Latest webinars
                            </a>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <img class="absolute top-0 right-0 z-0 hidden w-10/12 pt-16 -mt-48 md:block b-auto sm:w-6/12 sm:mt-0" src="{{ asset('storage/image/cavsu-statue-1.png') }}" alt="..." style="max-height: 860px;">
        <img class="absolute top-0 right-0 z-0 bg-gradient-to-b md:hidden" src="{{ asset('storage/image/cavsu-statue-2.png') }}" alt="..." style="max-height: 860px;">
    </section>
</div>