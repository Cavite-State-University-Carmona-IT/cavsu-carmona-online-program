<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="w-full p-4 h-full">
        <div class="flex justify-between">
            <p class="font-bold text-base tracking-wide text-gray-800 pt-2">Company Information</p>
            @if($edit_option == true)
                <div class="flex justify-between">
                    <a wire:click="cancelOption" class="mx-1 hover:shadow-md bg-white flex-none justify-items-center border border-red-300 rounded-full w-8 h-8 flex justify-center pt-2">
                        <i class="fas fa-times text-red-300 fa-xs"></i>
                    </a>
                    <a wire:click="submit" wire:loading.attr="disabled"  class="mx-1 hover:shadow-md bg-white flex-none justify-items-center border border-green-300 rounded-full w-8 h-8 flex justify-center pt-2">
                        <i class="fas fa-check text-green-300 fa-xs"></i>
                    </a>
                </div>
            @else 
                <a wire:click="editOption" class="hover:shadow-md bg-white flex-none justify-items-center border border-gray-100 rounded-full w-8 h-8 flex justify-center pt-2">
                    <i class="fas fa-pen text-gray-300 fa-xs"></i>
                </a>
            @endif
        </div>
        <hr class="my-2">
        <div class="grid grid-cols-11 gap-4">
            <div class="col-span-full md:col-span-4">
                {{-- name --}}
                <div class="my-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1">
                        Company
                    </label> 
                    <input class="text-sm block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" 
                        wire:model="name"
                        {{ $edit_option == false ? 'readonly' : ''}}
                    />
                    @error('name')
                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- address --}}
                <div class="my-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1">
                        Address
                    </label> 
                    <textarea class="text-sm block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        rows="3"
                        wire:model="address"
                        {{ $edit_option == false ? 'readonly' : ''}}
                        >
                    </textarea>
                    @error('address')
                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- phone --}}
                <div class="my-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1">
                        Phone
                    </label> 
                    <input class="text-sm block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="number" 
                        wire:model="phone"
                        {{ $edit_option == false ? 'readonly' : ''}}
                    />
                    @error('phone')
                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-span-full md:col-span-4">
                {{-- email --}}
                <div class="my-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1">
                        Email
                    </label> 
                    <input class="text-sm block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="email" 
                        wire:model="email"
                        {{ $edit_option == false ? 'readonly' : ''}}
                    />
                    @error('email')
                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- headline header --}}
                <div class="my-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1">
                        Headline Header
                    </label> 
                    <input class="text-sm block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        wire:model="headline_header"
                        type="text" 
                        {{ $edit_option == false ? 'readonly' : ''}}
                    />
                    @error('headline_header')
                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- headline body --}}
                <div class="my-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1">
                        Headline Body
                    </label> 
                    <textarea class="text-sm block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        rows="3"
                        wire:model="headline_body"
                        {{ $edit_option == false ? 'readonly' : ''}}
                        >
                    </textarea>
                    @error('headline_body')
                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-span-full md:col-span-3">
                {{-- image --}}
                <div class="mb-3">
                    <div class="w-full">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Upload <small class="text-gray-400 ml-2">Image(jpg,png)</small>
                        </label> 
                        <label class="flex flex-col w-full hover:bg-gray-100">
                            <div class="relative flex flex-col items-center justify-center pb-9/12">

                                <img @if($image) src="{{ $image->temporaryUrl() }}" @else src="{{ $image_prev ? asset('storage/image/icons/'.$image_prev) : asset('storage/image/icons/none.jpg') }}" @endif 
                                class="absolute rounded-lg w-full h-full object-cover border-dashed border-4 border-gray-100 inset-0">
                                
                                <input type="file" class="opacity-0" accept="image/*" 
                                    wire:model="image" 
                                    {{ $edit_option == false ? 'disabled' : ''}}
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
    </div>
</div>
