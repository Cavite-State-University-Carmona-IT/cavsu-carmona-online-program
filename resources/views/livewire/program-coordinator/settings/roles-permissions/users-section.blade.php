<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="w-full bg-white min-h-screen pt-16 mt-2">
        <div class="flex flex-col h-full w-full py-4 px-6">
            <div class="flex-auto">
                <div class="">
                    <div class="flex justify-between" x-data="{ modalNewUser: false }">
                        <p class="font-bold text-base tracking-wide text-gray-800">Users</p>
                        <a x-on:click="modalNewUser = !modalNewUser" class="text-gray-400 hover:text-blue-400 hover:border-blue-300 bg-white flex-none flex justify-center items-center border border-gray-300 rounded-full w-8 h-8">
                            <i class="fas fa-plus fa-xs"></i>
                        </a>
                        <!--modal: new user-->
                        <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center">
                            <div class="border border-gray-200 rounded-lg shadow-lg  h-auto md:w-96 p-6 lg:p-8 bg-white" 
                                x-show="modalNewUser"  
                                x-on:close-modal-extension-service.window="modalNewUser = false"
                                x-on:open-modal-extension-service.window="modalNewUser = true" 
                                wire:ignore.self
                                >
                                <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                    <!--Title-->
                                    <div class="flex justify-between items-center pb-3 border-b border-gray-200 mb-3">
                                        {{-- <p class="text-2xl font-bold">Simple Modal!</p> --}}
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                                            Set User Role
                                        </h3>
                                        <div class="cursor-pointer" @click="modalExtensionService = false">
                                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                            </svg>
                                        </div>
                                    </div>
                
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
                    <input wire:model="search" class="px-4 w-full rounded-lg bg-gray-50 border-0 focus:shadow-lg focus:ring-gray-50 ring-offset-2 focus:bg-white my-2 text-sm" type="text" placeholder="search ..."/>
                    {{-- <hr class="my-2"> --}}
                    @foreach($users_with_roles as $user_with_roles)
                        <div class="flex py-4 h-full border-b border-gray-100">
                            <div class="flex-none">
                                <img class="object-cover w-12 h-12 rounded-full border border-gray-200" src="{{ asset('storage/image/users/'.($user_with_roles->profile_photo_path ? $user_with_roles->profile_photo_path : 'default.jpg')) }}">
                            </div>
                            <div class="flex-auto">
                                <div class="flex mb-2">
                                    <div class="flex-auto ml-2 flex items-center" @click="openFieldOfInterest = !openFieldOfInterest">
                                        <div class="">
                                            <p class="text-sm font-bold tracking-wide text-gray-800 line-clamp-2">{{ $user_with_roles->first_name }} {{ $user_with_roles->middle_name ? $user_with_roles->middle_name[0]."." : "" }} {{ $user_with_roles->last_name }}</p>
                                            <p class="text-sm tracking-wide text-gray-700 line-clamp-2">{{ $user_with_roles->roles->first()->display_name }}</p>
                                        </div>
                                    </div>
                                    <div x-data="{ dropdownMenuOpen: false }" class="relative flex-none">
                                        <button @click="dropdownMenuOpen = !dropdownMenuOpen" class="relative z-10 block p-2 text-gray-400 hover:text-gray-500 focus:outline-none focus:text-blue-500">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="absolute right-0 mt-2 bg-white rounded-xl overflow-hidden shadow-xl z-20 p-2 border border-gray-100 w-48" x-show="dropdownMenuOpen" x-on:close-modal-dropdown-menu.window="dropdownMenuOpen = false" style="display: none;">
                                            
                                            <button wire:click="openName(1)" class="w-full text-left px-4 py-2 mt-2 text-sm tracking-wide bg-transparent rounded-lg md:mt-0 hover:text-green-400 focus:text-green-400 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:shadow-outline">
                                                Change Role
                                            </button>
                                            <button wire:click="openName(1)" class="w-full text-left px-4 py-2 mt-2 text-sm tracking-wide bg-transparent rounded-lg md:mt-0 hover:text-red-400 focus:text-red-400 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:shadow-outline">
                                                Remove Role
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex-none pt-4">
                {{ $users_with_roles->links() }}
            </div>
        </div>
    </div>
</div>
