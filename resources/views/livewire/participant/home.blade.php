<div>
    {{-- In work, do what you enjoy. --}}

    <div class="max-w-full">
        <div class="w-full">
            <div class="overflow-hidden ">
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
    <script>
            console.log('dsajdksjadka')
            const btn = document.querySelector('button.mobile-menu-button')
            const menu = document.querySelector('.mobile-menu')

            btn.addEventListener("click",()=>{
            menu.classList.toggle("hidden");
             })
    </script>
</div>
