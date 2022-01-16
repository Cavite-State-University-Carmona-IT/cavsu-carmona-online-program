<div>
    @if($webinar != null)
        <div class="max-w-full mt-16">
            <div class="bg-gray-900 h-96 md:h-80 w-full">
            </div>
            <div class="text-center absolute w-full" style="top: 60px">
                <div class="mt-20 px-10 md:px-28 grid grid-cols-3">
                    {{-- webinar basic details --}}
                    <div class=" md:col-span-2 col-span-3">
                        <p class="text-gray-100 text-xs text-left font-semibold tracking-wide mb-2">
                            {{ $webinar->fieldOfInterest->extensionService->name }} 
                            <i class="fas fa-chevron-right fa-xs mx-1"></i>
                            {{ $webinar->fieldOfInterest->name }}
                        </p>
                        <p class=" text-white tracking-wide line-clamp-2 text-xl md:text-3xl font-bold text-left mb-2">{{ $webinar->title }}</p>
                        <p class="text-gray-100 text-sm md:text-base line-clamp-1 text-left mb-2">{{ $webinar->speaker }}</p>
                        <p class="text-gray-200 text-sm font-semibold text-left mb-2">
                            Created By:
                            {{ $webinar->createdBy()->first_name }} 
                            {{ $webinar->createdBy()->middle_name ? $webinar->createdBy()->middle_name[0] :'' }}
                            {{ $webinar->createdBy()->last_name }} 
                        </p>
                        <div class="flex flex-row mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-1 h-4 w-4 text-yellow-400 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg> 
                            <p class="text-gray-200 text-sm text-left ml-2 font-semibold">{{ $webinar->ratings() == 0 ? "No" : $webinar->ratings() }} ({{ $webinar->review()->count() }} ratings)</p>
                            <p class="text-gray-200 text-sm text-left ml-2 font-semibold">{{ $webinar->enrolled()->count() }} registered</p>
                            
                        </div>
                        <p class="text-gray-300 text-sm text-left font-semibold">
                            <i class="fas fa-calendar-alt fa-xs"></i> 
                            Date: {{ carbon\carbon::parse($webinar->date)->format('M d, Y') }}
                        </p>
                    </div>
                    {{-- overlap card: image --}}
                    <div class="hidden bg-white col-span-3 md:col-span-1 rounded-xl p-3 shadow-lg h-full md:flex flex-col">
                        <img class="rounded-lg w-full" src="{{ asset('storage/image/webinars/'.$webinar->image) }}"/>

                        <p class="text-3xl font-bold text-gray-800 p-4 text-left tracking-wide">
                            @if($webinar->price == 0 || $webinar->price == null)
                                FREE
                            @else
                                ₱ {{ $webinar->price }}
                            @endif
                        </p>
                        <div class="p-3 w-full">
                            <a class="cursor-pointer p-3 font-bold tracking-wide w-full text-xs  transition ease-in duration-200 focus:outline-none bg-green-600 text-white "
                                @if(auth()->user()) 
                                    wire:click="register()"
                                @else 
                                    href="{{ route('register') }}"
                                @endif
                                >
                                @if($webinar->price == 0 || $webinar->price == null)
                                    REGISTER FOR FREE
                                @else
                                    REGISTER NOW
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="grid grid-cols-3 -mt-16 md:-mt-0 px-10 md:px-28">
                <div class="col-span-3 md:col-span-2  h-auto">
                    <div class="md:hidden">
                        <div class="aspect-w-16 aspect-h-9">
                            <img class="rounded-xl w-full object-cover border border-gray-200" src="{{ asset('storage/image/webinars/'.$webinar->image) }}"/>
                        </div>
                        <div class="flex justify-between">
                            <p class="text-3xl mt-2 font-bold text-gray-800 text-left tracking-wide">
                                @if($webinar->price == 0 || $webinar->price == null)
                                    FREE
                                @else
                                    ₱ {{ $webinar->price }}
                                @endif
                            </p>
                            <div class="py-3">
                                <a class="cursor-pointer rounded-xl p-3 font-bold tracking-wide w-full text-xs  transition ease-in duration-200 focus:outline-none bg-green-600 text-white "
                                    @if(auth()->user()) 
                                        wire:click="register()"
                                    @else 
                                        href="{{ route('register') }}"
                                    @endif
                                    >
                                    @if($webinar->price == 0 || $webinar->price == null)
                                        REGISTER FOR FREE
                                    @else
                                        REGISTER NOW
                                    @endif
                                </a>
                            </div>
                        </div>
                        <hr class="my-3">
                    </div>

                    {{-- about --}}
                    <div class="text-sm font-medium tracking-wide my-4 leading-relaxed" x-data="{ about_seemore: false }">
                        <p class="text-gray-600 line-clamp-6" :class="{ 'line-clamp-none': about_seemore }">
                            {{ $webinar->about }} 
                        </p>
                        <span class="text-blue-700 cursor-pointer" @click="about_seemore = !about_seemore">see 
                            <template x-if="about_seemore">
                                <span>less</span>
                            </template>
                            <template x-if="!about_seemore">
                                <span>more</span>
                            </template>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
    @else
        {{-- component 404 not found --}}
        <div class="pt-32">
            404 NOT FOUND
        </div>
    @endif
</div>
