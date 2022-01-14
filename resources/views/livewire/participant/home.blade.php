<div>
    {{-- In work, do what you enjoy. --}}
    <div class="max-w-full">
        <div class="w-full">
            <div class="overflow-hidden ">

                {{-- HEADLINE --}}
                @livewire('participant.headline.headline-section')

                {{-- EXTENSION SERVICE --}}
                @livewire('participant.extension-services-section')

                {{-- UPCOMING WEBINAR --}}
                @livewire('participant.home.upcoming-webinars-section')
                
                {{-- LATEST WEBINAR --}}
                @livewire('participant.home.latest-webinars-section')

                

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
