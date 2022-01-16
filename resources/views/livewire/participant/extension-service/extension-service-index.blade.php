<div>
    {{-- In work, do what you enjoy. --}}
    <div class="max-w-full">
        <div class="w-full">
            <div class="overflow-hidden ">
                {{-- HEADLINE --}}
                {{-- @livewire('participant.extension-service.headline-section') --}}

                {{-- COURSES SUGGESTION --}}
                @livewire('participant.extension-service.webinar-section', ['extension_service_name' => $extension_service_name])

                {{-- FEATURED TOPICS --}}
                @livewire('participant.featured-topics-section')

            </div>
        </div>
    </div>
</div>