<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="max-w-full pt-16 mt-2 bg-white">
        <div class="grid grid-cols-3">
            {{-- left panel --}}
            <div class="md:col-span-1 col-start-1 col-span-full p-4 ">
                @livewire('program-coordinator.settings.extension-service-section')
            </div>
            {{-- right panel --}}
            <div class="md:col-span-2 col-span-full p-8 bg-custom-light-gray-background">
                @livewire('program-coordinator.settings.headline-section')

                <div class="grid grid-cols-10 gap-6">
                    <div class="col-span-full md:col-span-6">
                        @livewire('program-coordinator.settings.permission-section')
                    </div>
                    <div class="col-span-full md:col-span-4">
                        @livewire('program-coordinator.settings.ecertificate-template-section')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>