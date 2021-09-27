<div>
    {{-- In work, do what you enjoy. --}}
    @if(auth()->check())
        @include('layouts.navigation.nav-component')
    @else
        @include('layouts.navigation.nav-guest-component')
    @endif

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-4">
            <div class=" overflow-hidden">
                {{-- HEADLINE --}}
                @livewire('participant.headline-section')

                @if(auth()->check())
                {{-- USER SECTION --}}

                {{-- COURSES USER IN PROGRESS --}}
                @livewire('participant.user.courses-inprogress-section')

                @endif

                {{-- COURSES SUGGESTION --}}
                @livewire('participant.courses-suggestion-section')

                {{-- EXTENSION SERVICE --}}
                @livewire('participant.extension-services-section')

                {{-- FEATURED TOPICS --}}
                @livewire('participant.featured-topics-section')

            </div>
        </div>
    </div>
</div>
