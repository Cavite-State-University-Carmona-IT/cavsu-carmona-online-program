<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="max-w-full pt-16 mt-2 bg-white">
        {{-- modal --}}
        <div x-data="{ modalGenerate: false }" >
            <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center">
                <div class="border-1 border-gray-200 rounded-lg shadow-lg  h-auto w-72 md:p-6 lg:p-8 p-4 bg-white" 
                    x-show="modalGenerate"  
                    @click.away="modalGenerate = false"
                    x-on:close-modal-generate.window="modalGenerate = true"
                    >
                    <div class="mt-3 text-center sm:mt-0 sm:text-left">
                        <h3 class="text-lg font-medium leading-6 text-gray-700">
                            Notification
                        </h3>
    
                        <hr class="my-4">
                        
                        <p class="text-red-500 text-sm italic mb-3">No data to generate</p>
    
                        <div class="flex flex-row-reverse">
                            <button class="px-4 py-2 uppercase tracking-wide text-xs font-bold rounded-lg bg-gray-500 text-white" 
                                @click="modalGenerate = false"
                                >
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- content --}}
        <div  x-data="{ tab: 'tabUsers'}" class="grid grid-cols-3 w-full px-4 md:px-12 lg:px-40 py-0 md:py-9 h-screen">
            
            {{-- left panel --}}
            <div class="col-span-1 hidden md:block py-5 border-r border-gray-200">
                <div class="w-full px-9">
                    <div class="text-gray-500 font-bold text-lg mb-2">Generate Reports</div>
                    <div class="text-gray-400 text-xs">Download report in Excel Format</div>
                </div>
                <hr class=" m-6">
                <div class="pl-10">
                    <div class="grid grid-rows-3 text-left text-sm">
                        <div class="row-span-1 flex">
                            <div class="bg-gray-200 w-1 flex-none py-5">
                                <div class="w-full h-full" :class="tab === 'tabUsers' ? 'bg-green-300' : 'bg-gray-200'">
                                </div>
                            </div>
                            <a wire:click="option(1)" @click="tab = 'tabUsers'" class="outline-none p-6 cursor-pointer" :class="tab === 'tabUsers' ? 'text-gray-800 font-bold' : 'text-gray-500 font-semibold'">
                                Users
                            </a>
                        </div>
                        <div class="row-span-1 flex">
                            <div class="bg-gray-200 w-1 flex-none py-5">
                                <div class="w-full h-full" :class="tab === 'tabRegisteredUsers' ? 'bg-green-300' : 'bg-gray-200'">
                                </div>
                            </div>
                            <a wire:click="option(2)" @click="tab = 'tabRegisteredUsers'" class="outline-none p-6 cursor-pointer" :class="tab === 'tabRegisteredUsers' ? 'text-gray-800 font-bold' : 'text-gray-500 font-semibold'">
                                Webinar Registered Users
                            </a>
                        </div>
                        <div class="row-span-1 flex">
                            <div class="bg-gray-200 w-1 flex-none py-5">
                                <div class="w-full h-full" :class="tab === 'tabWebinars' ? 'bg-green-300' : 'bg-gray-200'">
                                </div>
                            </div>
                            <a wire:click="option(3)" @click="tab = 'tabWebinars'" class="outline-none p-6 cursor-pointer" :class="tab === 'tabWebinars' ? 'text-gray-800 font-bold' : 'text-gray-500 font-semibold'">
                                Webinar Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- right panel --}}
            <div class="md:col-span-2 col-span-3 py-0 md:py-5 px-7">
                <div class="w-full flex py-4 md:hidden">
                    <a class="inline-block text-sm mr-3 font-semibold border-b-4 px-2 pb-1 cursor-pointer" 
                        :class="tab === 'tabUsers' ? 'text-gray-800 border-green-200' : 'text-gray-300 border-gray-100'" 
                        wire:click="option(1)" 
                        x-on:click="tab = 'tabUsers'"
                    >
                        Users
                    </a>
                    <a class="inline-block text-sm mr-3 font-semibold border-b-4 px-2 pb-1 cursor-pointer" 
                        :class="tab === 'tabRegisteredUsers' ? 'text-gray-800 border-green-200' : 'text-gray-300 border-gray-100'" 
                        wire:click="option(2)" 
                        x-on:click="tab = 'tabRegisteredUsers'"
                    >
                        Registered Users
                    </a>
                    <a class="inline-block text-sm mr-3 font-semibold border-b-4 px-2 pb-1 cursor-pointer" 
                        :class="tab === 'tabWebinars' ? 'text-gray-800 border-green-200' : 'text-gray-300 border-gray-100'" 
                        wire:click="option(3)" 
                        x-on:click="tab = 'tabWebinars'"
                    >
                        Webinar Details
                    </a>
                </div>
                <div class="w-full">
                    <template x-if="tab == 'tabUsers'">
                        <span>
                            <div class="w-full">
                                <div class="text-gray-500 font-bold text-lg mb-2">Users Report</div>
                                <div class="text-gray-400 text-xs">Lorem ipsum</div>
                            </div>
                        </span>
                    </template>
                    <template x-if="tab == 'tabRegisteredUsers'">
                        <span>
                            <div class="w-full">
                                <div class="text-gray-500 font-bold text-lg mb-2">Registered Users Report</div>
                                <div class="text-gray-400 text-xs">Lorem ipsum</div>
                            </div>
                        </span>
                    </template>
                    <template x-if="tab == 'tabWebinars'">
                        <span>
                            <div class="w-full">
                                <div class="text-gray-500 font-bold text-lg mb-2">Webinar Details Report</div>
                                <div class="text-gray-400 text-xs">Lorem ipsum</div>
                            </div>
                        </span>
                    </template>
                </div>
                <hr class="my-6">


                {{-- Users --}}
                <div class="w-full h-full" x-show="tab === 'tabUsers'">

                    @if($u_chk_specific_date == true)
                        {{-- date --}}
                        <div class="mb-3">
                            <div class="flex">
                                <div class="mx-3 w-full">
                                    <label for="u_date" class="block text-sm font-medium">Date</label>
                                    <input wire:model="u_date" type="date" id="u_date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                                </div>
                            </div>
                            @error($u_date)
                                <p class="italic text-xs text-red-400 block mx-3">{{ $message }}</p>
                            @enderror
                        </div>
                    @else
                        {{-- start date and end date --}}
                        <div class="grid gap-2 grid-cols-2 mx-3 mb-3">
                            <div class="col-span-1">
                                <label for="u_start_date" class="block text-sm font-medium">Start Date</label>
                                <input wire:model="u_start_date" type="date" id="u_start_date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                            <div class="col-span-1">
                                <label for="u_end_date" class="block text-sm font-medium">End Date</label>
                                <input wire:model="u_end_date" type="date" id="u_end_date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                        </div>
                    @endif
                    {{-- checkbox specific date --}}
                    <div class="flex place-items-center mb-4 mx-3">
                        <div class="flex items-center h-5">
                            <input wire:model="u_chk_specific_date" id="u_chk_specific_date" type="checkbox" class="focus:ring-1 focus:ring-gray-200 h-4 w-4 text-green-500 border-gray-300 rounded ring-0">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="u_chk_specific_date" class="font-regular text-gray-700">Specific Date</label>
                        </div>
                    </div>
                    {{-- download button --}}
                    <div class="flex flex-row-reverse mx-3">
                        {{-- <p class="italic text-xs text-red-400">{{ $status }}</p> --}}
                        <div class="flow-root">
                            <button wire:click="generateUsers" wire:loading.attr="disabled" class="float-right px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-gray-500 hover:bg-gray-600 active:bg-gray-700 focus:ring-gray-300">Download</button>
                        </div>
                    </div>
                </div>

                {{-- Registered Users --}}
                <div class="w-full h-full" x-show="tab === 'tabRegisteredUsers'">
                    @if($ru_chk_specific_date == true)
                        {{-- date --}}
                        <div class="mb-3">
                            <div class="flex">
                                <div class="mx-3 w-full">
                                    <label for="ru_date" class="block text-sm font-medium">Date</label>
                                    <input wire:model="ru_date" type="date" id="ru_date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                                </div>
                            </div>
                            @error($ru_date)
                                <p class="italic text-xs text-red-400 block mx-3">{{ $message }}</p>
                            @enderror
                        </div>
                    @else
                        {{-- start date and end date --}}
                        <div class="grid gap-2 grid-cols-2 mx-3 mb-3">
                            <div class="col-span-1">
                                <label for="ru_start_date" class="block text-sm font-medium">Start Date</label>
                                <input wire:model="ru_start_date" type="date" id="ru_start_date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                            <div class="col-span-1">
                                <label for="ru_end_date" class="block text-sm font-medium">End Date</label>
                                <input wire:model="ru_end_date" type="date" id="ru_end_date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                        </div>
                    @endif
                    {{-- checkbox specific date --}}
                    <div class="flex place-items-center mb-4 mx-3">
                        <div class="flex items-center h-5">
                            <input wire:model="ru_chk_specific_date" id="ru_chk_specific_date" type="checkbox" class="focus:ring-1 focus:ring-gray-200 h-4 w-4 text-green-500 border-gray-300 rounded ring-0">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="ru_chk_specific_date" class="font-regular text-gray-700">Specific Date</label>
                        </div>
                    </div>
                    {{-- extension service --}}
                    <div class="flex mb-4">
                        <div class="mx-3 w-full">
                            <label for="ru_extension_service_id" class="block text-sm font-medium">Extension Service</label>
                            <select wire:model="ru_extension_service_id" id="ru_extension_service_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm">
                                <option value="">- ALL -</option>
                                @foreach($extension_services as $extension_service)
                                    <option value="{{ $extension_service->id }}">{{ $extension_service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- course --}}
                    <div class="flex mb-3">
                        <div class="mx-3 w-full">
                            <label for="ru_webinar_id" class="block text-sm font-medium">Webinar</label>
                            <select wire:model="ru_webinar_id" id="ru_webinar_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm">
                                <option value="">- ALL -</option>
                                @foreach($ru_webinars as $webinar)
                                    <option value="{{ $webinar->id }}">{{ $webinar->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- status --}}
                    <div class="flex mb-4">
                        <div class="mx-3 w-full">
                            <label for="ru_type" class="block text-sm font-medium">User Type</label>
                            <select wire:model="ru_type" id="ru_type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm">
                                <option value="1">All</option>
                                <option value="2">Completed</option>
                                <option value="3">In-Progress</option>
                            </select>
                        </div>
                    </div>
                    {{-- download button --}}
                    <div class="flex flex-row-reverse mx-3">
                        {{-- <p class="italic text-xs text-red-400">{{ $status }}</p> --}}
                        <div class="flow-root">
                            <button wire:click="generateRegisteredUsers" wire:loading.attr="disabled" class="float-right px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-gray-500 hover:bg-gray-600 active:bg-gray-700 focus:ring-gray-300">Download</button>
                        </div>
                    </div>
                </div>

                {{-- Webinar Details --}}
                <div class="w-full h-full" x-show="tab === 'tabWebinars'">
                    @if($wd_chk_specific_date == true)
                        {{-- date --}}
                        <div class="mb-3">
                            <div class="flex">
                                <div class="mx-3 w-full">
                                    <label for="wd_date" class="block text-sm font-medium">Date</label>
                                    <input wire:model="wd_date" type="date" id="wd_date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                                </div>
                            </div>
                            @error($wd_date)
                                <p class="italic text-xs text-red-400 block mx-3">{{ $message }}</p>
                            @enderror
                        </div>
                    @else
                        {{-- start date and end date --}}
                        <div class="grid gap-2 grid-cols-2 mx-3 mb-3">
                            <div class="col-span-1">
                                <label for="wd_start_date" class="block text-sm font-medium">Start Date</label>
                                <input wire:model="wd_start_date" type="date" id="wd_start_date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                            <div class="col-span-1">
                                <label for="wd_end_date" class="block text-sm font-medium">End Date</label>
                                <input wire:model="wd_end_date" type="date" id="wd_end_date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm"/>
                            </div>
                        </div>
                    @endif
                    {{-- checkbox specific date --}}
                    <div class="flex place-items-center mb-4 mx-3">
                        <div class="flex items-center h-5">
                            <input wire:model="wd_chk_specific_date" id="wd_chk_specific_date" type="checkbox" class="focus:ring-1 focus:ring-gray-200 h-4 w-4 text-green-500 border-gray-300 rounded ring-0">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="wd_chk_specific_date" class="font-regular text-gray-700">Specific Date</label>
                        </div>
                    </div>
                    {{-- extension service --}}
                    <div class="flex mb-4">
                        <div class="mx-3 w-full">
                            <label for="wd_extension_service_id" class="block text-sm font-medium">Extension Service</label>
                            <select wire:model="wd_extension_service_id" id="wd_extension_service_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm">
                                <option value="">- ALL -</option>
                                @foreach($extension_services as $extension_service)
                                    <option value="{{ $extension_service->id }}">{{ $extension_service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- download button --}}
                    <div class="flex flex-row-reverse mx-3">
                        {{-- <p class="italic text-xs text-red-400">{{ $status }}</p> --}}
                        <div class="flow-root">
                            <button wire:click="generateWebinarDetails" wire:loading.attr="disabled" class="float-right px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-gray-500 hover:bg-gray-600 active:bg-gray-700 focus:ring-gray-300">Download</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>