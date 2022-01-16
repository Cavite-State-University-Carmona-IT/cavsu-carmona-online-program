<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    
    <div x-data="{ openFilter: true }" class="max-w-full pt-16 mt-2 bg-white">
        <div class="px-2 md:px-10">
            <div class="text-xl tracking-wide text-gray-800 font-black py-4">
                @if($field_of_interest_id == "") 
                    All {{ $extension_service->name }} Webinars 
                @else 
                    {{ $extension_service->name }} 
                    <i class="fas fa-chevron-right fa-xs mx-1"></i>
                    {{ $field_of_interest->name }}
                @endif
            </div>
            <button class="text-base font-bold tracking-wide border border-gray-400 focus:outline-none py-3 w-48 md:w-60" @click="openFilter = !openFilter">
                Filter <i class="fas fa-sliders-h"></i>
            </button>
        
            <div class="flex flex-row">
                <!-- left -->
                <div class="flex-none w-48 md:w-60 mr-0 md:mr-4"
                    x-transition.duration.500ms
                    x-show="openFilter"
                    >
                    <hr class="my-2">
                    {{-- topics --}}
                    <div class="w-full">
                        <div class="text-base font-black text-gray-900 py-2">Field Of Interest</div>
                        <select class="py-2 border border-gray-300 w-full" wire:model="field_of_interest_id">
                            <option value="">- All Field of Interest -</option>
                            @foreach($field_of_interests as $field_of_interest)
                                <option value="{{ $field_of_interest->id }}">{{ $field_of_interest->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr class="my-2">
                    {{-- Sort By --}}
                    <div class="w-full">
                        <div class="text-base font-black text-gray-900 py-2">Sort by</div>
                        <div class="form-check px-2 py-1">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                                type="radio" id="rdBtnSortBy" name="sort_by" wire:model="sort_by" value="0"
                            >
                            <label class="form-check-label inline-block text-gray-800" for="rdBtnSortBy">
                                Most Popular
                            </label>
                        </div>
                        <div class="form-check px-2 py-1">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                                type="radio" id="rdBtnSortBy" name="sort_by" wire:model="sort_by" value="1"
                            >
                            <label class="form-check-label inline-block text-gray-800" for="rdBtnSortBy">
                                Highest Rated
                            </label>
                        </div>
                        <div class="form-check px-2 py-1">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                                type="radio" id="rdBtnSortBy" name="sort_by" wire:model="sort_by" value="2"
                            >
                            <label class="form-check-label inline-block text-gray-800" for="rdBtnSortBy">
                                Newest
                            </label>
                        </div>
                    </div>
                    <hr class="my-2">
                    {{-- Price --}}
                    <div class="w-full">
                        <div class="text-base font-black text-gray-900 py-2">Price</div>
                        <div class="form-check px-2 py-1">
                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                                type="checkbox" wire:model="price_paid"
                                id="chkPricePaid"
                                >
                            <label class="form-check-label inline-block text-gray-800" for="chkPricePaid">
                                Paid
                            </label>
                        </div>
                        <div class="form-check px-2 py-1">
                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                                type="checkbox" wire:model="price_free"
                                id="chkPriceFree"
                                >
                            <label class="form-check-label inline-block text-gray-800" for="chkPriceFree">
                                Free
                            </label>
                        </div>
                    </div>
                </div>
                <!-- right -->
                @if($webinars->count() != 0)
                    <div class="flex-auto w-full p-4">
                        @foreach($webinars as $webinar)
                            <a href="{{ url('/webinar/'.$webinar->title) }}" class="cursor-pointer w-full flex flex-col md:flex-row border-b border-gray-200 py-4 px-3 md:px-0">
                                <div class="flex-none w-full md:w-60">
                                    <div class="relative flex flex-col items-center justify-center pt-12 pb-1/3">
                                        <img src="{{ asset('storage/image/webinars/'.$webinar->image) }}" class="absolute w-full h-full object-cover border border-gray-200 inset-0">
                                        <div class="absolute flex flex-col-reverse h-full w-full pt-4">
                                            <div class="absolute w-24 h-8 bg-opacity-50 bg-green-800"></div>
                                            <p class="text-base px-4 font-black text-white opacity-80 shadow-lg">
                                                @if($webinar->price)
                                                    ₱ {{ $webinar->price }}
                                                @else 
                                                    FREE 
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-auto md:ml-4">
                                    <div class="block my-1">
                                        <p class="line-clamp-2 text-base font-black text-gray-800  tracking-wide w-full mb-0 p-0">
                                            {{ $webinar->title }}
                                        </p>
                                    </div>
                                    <div class="block my-1">
                                        <p class="text-sm text-gray-700 tracking-wide w-full mb-0 p-0 line-clamp-2">
                                            {{ $webinar->about }}
                                        </p>
                                    </div>
                                    <div class="block my-1">
                                        <p class="text-xs text-gray-500 tracking-wide w-full mb-0 p-0 line-clamp-1">
                                            {{ $webinar->speaker }}
                                        </p>
                                    </div>
                                    <div class="flex flex-row">
                                        <div class="flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg> 
                                        </div>
                                        <div class="">
                                            <p class="text-gray-500 text-xs text-left ml-2 tracking-wide inline-block">{{ $webinar->ratings() == 0 ? "No" : number_format($webinar->ratings(), 1, '.', '') }} ({{ $webinar->review()->count() }} ratings)</p>
                                            <p class="text-gray-500 text-xs text-left ml-2 tracking-wide inline-block">{{ $webinar->enrolled()->count() }} registered</p>
                                            <p class="text-gray-500 text-xs text-left ml-4 tracking-wide inline-block"><i class="fas fa-calendar-alt fa-xs"></i> Date: {{ carbon\carbon::parse($webinar->date)->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else 
                    <div class="w-full px-2 md:px-16">
                        <div class="flex flex-col w-full">
                            <h1 class="font-semibold">Sorry, we couldn’t find any results for</h1>
                            <h3 class="text-sm font-semibold font">Try adjusting your search. Here are some ideas:</h3>
                        </div>
                        <div class="w-full py-5 pl-8 text-sm">
                            <ul class="list-disc">
                                <li>Make sure all words are spelled correctly</li>
                                <li>Try Different search Term</li>
                                <li>Try more general search terms</li>
                            </ul>
                        </div>
                    </div>
                @endif
                
            </div>
        </div>
    </div>
</div>

