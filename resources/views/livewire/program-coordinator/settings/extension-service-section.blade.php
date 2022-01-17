<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    {{-- extension service --}}
    <div class="w-full p-4 border border-gray-200 rounded-lg">
        <p class="font-bold text-base tracking-wide text-gray-800">Extension Services</p>
        @foreach($extension_services as $extension_service)
            <hr class="my-2">
            <div class="" x-data="{ openFieldOfInterest: false }">
                <div class="flex py-2">
                    <div class="flex-none">
                        <img class="object-cover w-12 h-12 rounded-full" src="{{ asset('storage/image/extension-services/'.$extension_service->image) }}">
                    </div>
                    <div class="flex-auto">
                        <div class="flex mb-2">
                            <div class="flex-auto ml-2 cursor-pointer" @click="openFieldOfInterest = !openFieldOfInterest">
                                <p class="text-sm font-bold tracking-wide text-gray-800 line-clamp-2 mb-2">{{ $extension_service->name }}</p>
                                <p class="text-sm tracking-wide text-gray-700 line-clamp-2">{{ $extension_service->details }}</p>
                            </div>
                            <div x-data="{ dropdownMenuOpen: false }" class="relative flex-none">
                                <button @click="dropdownMenuOpen = !dropdownMenuOpen" class="relative z-10 block p-2 text-gray-500 hover:text-gray-600 focus:outline-none focus:text-blue-500">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            
                                <div class="absolute right-0 mt-2 w-60 bg-white rounded-lg border border-gray-200 overflow-hidden shadow-xl z-20"
                                    x-show="dropdownMenuOpen" 
                                    x-on:close-modal-dropdown-menu.window="dropdownMenuOpen = false"
                                    >
                                    
                                    <button wire:click="openName({{ $extension_service->id }})" class="text-left appearance-none outline-none ring-0 border-0 w-full focus:outline-none block px-5 py-3 text-sm text-gray-800 border-b hover:bg-gray-100 border-gray-200">
                                        Name <span class="text-gray-400 text-xs"> (Change)</span>
                                    </button>
                                    <button wire:click="openLinkName({{ $extension_service->id }})" class="text-left appearance-none outline-none ring-0 border-0 w-full focus:outline-none block px-5 py-3 text-sm text-gray-800 border-b hover:bg-gray-100 border-gray-200">
                                        Link Name <span class="text-gray-400 text-xs"> (Change)</span>
                                    </button>
                                    <button wire:click="openImage({{ $extension_service->id }})" class="text-left appearance-none outline-none ring-0 border-0 w-full focus:outline-none block px-5 py-3 text-sm text-gray-800 border-b hover:bg-gray-100 border-gray-200">
                                        Image <span class="text-gray-400 text-xs"> (Change)</span>
                                    </button>
                                    <button wire:click="openDetails({{ $extension_service->id }})" class="text-left appearance-none outline-none ring-0 border-0 w-full focus:outline-none block px-5 py-3 text-sm text-gray-800 border-b hover:bg-gray-100 border-gray-200">
                                        Details <span class="text-gray-400 text-xs"> (Change)</span>
                                    </button>
                                    <button wire:click="openNewFieldOfInterest({{ $extension_service->id }})" class="text-left appearance-none outline-none ring-0 border-0 w-full focus:outline-none block px-5 py-3 text-sm text-gray-800 border-b hover:bg-gray-100 border-gray-200">
                                        Field of Interest <span class="text-gray-400 text-xs"> (Create)</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-100 rounded-lg w-full p-2"
                            x-show="openFieldOfInterest">
                            {{-- <p class="text-sm font-bold tracking-wide text-gray-800 line-clamp-2 mb-2">Field of Interests</p> --}}
                            @foreach($extension_service->fieldOfInterests as $field_of_interest)
                                <div class="p-2 w-full flex justify-between cursor-pointer" wire:click="openFieldOfInterest({{ $field_of_interest->id }})">
                                    <p class=" text-sm text-gray-700">{{ $field_of_interest->name }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div x-data="{ modalFieldOfInterest: false }">
        <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center">
            <div class="border border-gray-200 rounded-lg shadow-lg  h-auto md:w-96 p-6 lg:p-8 bg-white" 
                x-show="modalFieldOfInterest"  
                @click.away="modalFieldOfInterest = false"
                x-on:close-modal-field-of-interest.window="modalFieldOfInterest = false"
                x-on:open-modal-field-of-interest.window="modalFieldOfInterest = true" 
                wire:ignore.self
                >
                <div class="mt-3 text-center sm:mt-0 sm:text-left">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        @if($selected_field_of_interest_edit) 
                            Update 
                            <span class="text-gray-500">
                                {{ $selected_field_of_interest_edit ? $selected_field_of_interest_edit->name : '' }}
                            </span>
                        @else 
                            New Field of Interest
                        @endif
                    </h3>

                    <hr class="my-4">

                    <div class="mb-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Name
                        </label> 
                        <input class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" 
                            wire:model="field_of_interest_name"
                        />
                        @error('field_of_interest_name')
                            <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Link Name
                        </label> 
                        <input class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text"
                            wire:model="field_of_interest_link_name"
                        />
                        @error('field_of_interest_link_name')
                            <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-between w-full mt-2">
                        @if($selected_field_of_interest_edit)
                            <button class="mr-3 px-4 py-2 uppercase tracking-wide text-red-500 border text-sm font-bold  rounded-lg border-red-500" 
                                wire:click="deleteFieldOfInterest"
                                wire:loading.attr="disabled" 
                                >
                                Delete
                            </button>
                        @endif
                        <button class="px-4 py-2 uppercase tracking-wide text-white text-sm font-bold  rounded-lg bg-blue-500" 
                            wire:click="submitFieldOfInterest"
                            wire:loading.attr="disabled" 
                            >
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-data="{ modalExtensionService: false }">
        <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center">
            <div class="border border-gray-200 rounded-lg shadow-lg  h-auto md:w-96 p-6 lg:p-8 bg-white" 
                x-show="modalExtensionService"  
                @click.away="modalExtensionService = false"
                x-on:close-modal-extension-service.window="modalExtensionService = false"
                x-on:open-modal-extension-service.window="modalExtensionService = true" 
                wire:ignore.self
                >
                <div class="mt-3 text-center sm:mt-0 sm:text-left">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Update <span class="text-gray-500">{{ ucwords($field_name) }}</span>
                    </h3>

                    <hr class="my-4">

                    @if($field_name == "name")
                        <div class="mb-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Name
                            </label> 
                            <input class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                type="text" 
                                wire:model="extension_service_name"
                            />
                            @error('extension_service_name')
                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                            @enderror
                        </div>
                    @elseif($field_name == "link_name")
                        <div class="mb-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Link Name
                            </label> 
                            <input class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                type="text" 
                                wire:model="extension_service_link_name"
                            />
                            @error('extension_service_link_name')
                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                            @enderror
                        </div>
                    @elseif($field_name == "details")
                        <div class="mb-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Details
                            </label> 
                            <textarea class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                type="text" 
                                wire:model="extension_service_details"
                                rows="4"
                                ><textarea>
                            @error('extension_service_details')
                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                            @enderror
                        </div>
                    @elseif($field_name =="image")
                        {{-- image --}}
                        <div class="mb-3">
                            <div class="w-full">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Upload <small class="text-gray-400 ml-2">Image(jpg,png)</small>
                                </label> 
                                <label class="flex flex-col w-full hover:bg-gray-100">
                                    <div class="relative flex flex-col items-center justify-center pt-12 pb-1/4">

                                        <img @if($extension_service_image) src="{{ $extension_service_image->temporaryUrl() }}" @else src="{{ asset('storage/image/extension-services/'.$extension_service_image_prev)}}" @endif 
                                        class="absolute rounded-lg w-full h-full object-cover border-dashed border-4 border-gray-100 inset-0">
                                        <i class="far fa-image fa-3x text-gray-300 group-hover:text-gray-400"></i>
                                        <p class="pt-1 text-sm tracking-wider font-semibold text-gray-300 group-hover:text-gray-400">
                                            Select a photo
                                        </p>
                                        <input type="file" class="opacity-0" accept="image/*" wire:model="extension_service_image"/>
                                    </div>
                                </label>
                            </div>
                            @error('image')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                    @endif

                    <div class="flex flex-row-reverse w-full mt-2">
                        <button class="px-4 py-2 uppercase tracking-wide text-white text-sm font-bold  rounded-lg bg-blue-500" 
                            wire:click="submitExtensionService"
                            wire:loading.attr="disabled" 
                            >
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
