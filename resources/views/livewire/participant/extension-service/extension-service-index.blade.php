<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    @if(auth()->check())
        @include('layouts.navigation.nav-component')
    @else
        @include('layouts.navigation.nav-guest-component')
    @endif

    <div class="max-w-full">
        <div class="w-full">
            <div class="overflow-hidden ">
                {{-- HEADLINE --}}
                {{ $this->extension_service_name }}
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
