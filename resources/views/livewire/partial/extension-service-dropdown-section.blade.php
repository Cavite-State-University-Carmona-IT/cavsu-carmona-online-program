<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="">
        @foreach($extension_services as $extension_service)
        <div x-data="{ fieldOfInterestDropdown: false }">
            <a class=" block px-4 py-2 mt-2 text-base tracking-wide bg-transparent rounded-lg md:mt-0 hover:text-green-400 focus:text-green-400 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:shadow-outline" 
                x-on:click="fieldOfInterestDropdown = !fieldOfInterestDropdown">
                {{ $extension_service->name }}
            </a>
            <div x-show="fieldOfInterestDropdown" class="rounded-lg bg-gray-50 my-2">
                @foreach($extension_service->fieldOfInterests as $field_of_interest)
                    <a class=" bg-transparent block px-4 py-3 tracking-wide mt-2 text-base md:mt-0 hover:text-green-500 focus:outline-none focus:shadow-outline" 
                        href="{{ url("extension-service/".$extension_service->link_name . "/" . $field_of_interest->link_name) }}">
                        {{ $field_of_interest->name }}
                    </a>
                @endforeach
            </div>
        </div>
        @endforeach
        <div x-show="extensionServiceDropdown" class="rounded-lg bg-gray-50 my-2">
            <a class=" bg-transparent block px-4 py-3 tracking-wide mt-2 text-base md:mt-0 hover:text-green-500 focus:outline-none focus:shadow-outline" 
                href="{{ route('program-coordinator.roles-and-permissions') }}">
                Roles & Permissions
            </a>
            <a class=" bg-transparent block px-4 py-3 tracking-wide mt-2 text-base md:mt-0 hover:text-green-500 focus:outline-none focus:shadow-outline" 
                href="{{ route('program-coordinator.ecertificate-templates') }}">
                E-Certificate Templates
            </a>
            <a class=" bg-transparent block px-4 py-3 tracking-wide mt-2 text-base md:mt-0 hover:text-green-500 focus:outline-none focus:shadow-outline" 
                href="{{ route('program-coordinator.company-information') }}">
                Company Information
            </a>
        </div>
    </div>
</div>
