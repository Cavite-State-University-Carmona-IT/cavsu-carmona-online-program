<div>
    {{-- Do your work, then step back. --}}
    <div class="w-full pt-6 px-6 h-full rounded-lg bg-white  shadow-xl">
        <div class="flex justify-between">
            <p class="font-bold text-base tracking-wide text-gray-800 pt-2">E-Certificate Template</p>
            <a class="hover:shadow-md bg-white flex-none justify-items-center border border-blue-400 rounded-full w-8 h-8 flex justify-center pt-2"
                wire:click="openModal">
                <i class="fas fa-plus text-blue-400 fa-xs"></i>
            </a>
            
        </div>
        <hr class="my-2">
        <input class="text-sm block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            type="text" wire:model="search" placeholder="search...">
        <div class="w-full my-2">
            <table class="min-w-full leading-normal ">
                <thead>
                    <tr class="text-sm font-bold tracking-wide text-gray-700 border-b border-gray-100">
                        {{-- <p class="text-sm font-bold tracking-wide text-gray-800 line-clamp-2 mb-2">Basura Ko, Ayos Ko</p> --}}
                        <td class="py-2">
                            Name
                        </td>
                        <td class="py-2">
                            Updated at
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ecertificate_templates as $ecertificate_template)
                        <tr class="text-gray-700 text-sm border-b border-gray-100 cursor-pointer"
                            wire:click="openEditModal({{ $ecertificate_template->id }})"
                            >
                            <td class="py-2">
                                {{ $ecertificate_template->name }}
                            </td>
                            <td class="py-2">
                                {{ carbon\carbon::parse($ecertificate_template->updated_at)->format('M d, Y') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex flex-col xs:flex-row py-4">
                {{ $ecertificate_templates->links('livewire::simple-tailwind') }}
            </div>
        </div>
    </div>

    {{-- modal --}}
    <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false" x-cloak>
                
        <!--Overlay-->
        <div class="overflow-auto" x-show="showModal" :class="{ 'absolute inset-0 z-40 flex items-center justify-center': showModal }">
            <!--Dialog-->
            <div class="border border-gray-200 rounded-lg shadow-lg bg-white w-11/12 md:max-w-lg mx-auto py-4 text-left px-6" 
                x-show="showModal" 
                x-on:open-modal.window="showModal = true"
                x-on:close-modal.window="showModal = false"
                >

                <!--Title-->
                <div class="flex justify-between items-center pb-3 border-b border-gray-200 mb-3">
                    {{-- <p class="text-2xl font-bold">Simple Modal!</p> --}}
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        E-Certificate <span class="text-gray-500">Template</span>
                    </h3>
                    <div class="cursor-pointer" @click="showModal = false">
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
						</svg>
					</div>
                </div>

                {{-- content --}}
                <div class="w-full grid grid-cols-2 gap-4 border-b border-gray-200">
                    {{-- left --}}
                    <div class="col-span-1">
                        {{-- css title --}}
                        <div class="mb-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Title <span class="text-gray-400">(CSS)</span>
                            </label> 
                            <textarea class="text-sm block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                rows="3"
                                wire:model="css_title">
                            </textarea>
                            @error('css_title')
                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- css participant name --}}
                        <div class="mb-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Participant Name <span class="text-gray-400">(CSS)</span>
                            </label> 
                            <textarea class="text-sm block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                rows="3"
                                wire:model="css_name">
                            </textarea>
                            @error('css_name')
                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- css date --}}
                        <div class="mb-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Date <span class="text-gray-400">(CSS)</span>
                            </label> 
                            <textarea class="text-sm block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                rows="3"
                                wire:model="css_date">
                            </textarea>
                            @error('css_date')
                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- right --}}
                    <div class="col-span-1">
                        {{-- name --}}
                        <div class="mb-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Name
                            </label> 
                            <input class="text-sm block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                type="text" wire:model="name">
                            @error('name')
                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- image --}}
                        <div class="mb-3">
                            <div class="w-full">
                                <label class="block text-sm font-bold tracking-wide text-gray-700 mb-2" for="grid-first-name">
                                    Upload <small class="text-gray-400 ml-2">Image(jpg,png)</small>
                                </label> 
                                <label class="flex flex-col w-full hover:bg-gray-100">
                                    <div class="relative flex flex-col items-center justify-center pb-1/2">

                                        <img @if($image) src="{{ $image->temporaryUrl() }}" @else src="{{ $image_prev ? asset('storage/image/template/ecertificate/'.$image_prev) : asset('storage/image/icons/none.jpg') }}" @endif 
                                        class="absolute rounded-lg w-full h-full object-cover border-dashed border-4 border-gray-100 inset-0">
                                        
                                        <input type="file" class="opacity-0" accept="image/*" 
                                            wire:model="image" 
                                            />
                                    </div>
                                </label>
                            </div>
                            @error('image')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>


                <!--Footer-->
                <div class="flex justify-end pt-2">
                    <button class="px-4 py-2 uppercase tracking-wide text-gray-500 text-sm font-bold  rounded-lg border border-gray-500" 
                        @click="showModal = false"
                        wire:loading.attr="disabled" 
                        >
                        Close
                    </button>
                    <button class="ml-3 px-4 py-2 uppercase tracking-wide text-white text-sm font-bold  rounded-lg bg-blue-500" 
                        wire:click="submit"
                        wire:loading.attr="disabled" 
                        >
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
