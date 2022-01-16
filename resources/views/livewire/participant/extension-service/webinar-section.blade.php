<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <svg style="position: absolute; width: 0; height: 0; overflow: hidden" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <symbol id="star" viewBox="0 0 28 28" preserveAspectRatio="xMaxYMax meet">
            <title>Star Rating</title>
            <path class="star"
                d="M13.996,22.501 L22.649,27.997 L20.352,17.637 L27.996,10.667 L17.930,9.768 L13.996,-0.003 L10.063,9.768 L-0.003,10.667 L7.641,17.637 L5.345,27.997 L13.996,22.501 Z"/>
        </symbol>
    </svg>
    
    <div x-data="{ openFilter: true }" class="max-w-full pt-16 mt-2 bg-white px-10">

        <div class="text-xl tracking-wide text-gray-800 font-black py-4">All {{ ucwords(strtolower($extension_service->name)) }} Webinars</div>
        <div class="">
            <button class="text-base font-bold tracking-wide border border-gray-400 focus:outline-none p-3 w-60" @click="openFilter = !openFilter">
                Filter <i class="fas fa-sliders-h"></i>
            </button>
        </div>
        <div class="flex flex-row flex-nowrap">
            <!-- left -->
            <div class="hidden md:block flex-none w-60 mr-4"
                x-transition.duration.500ms
                x-show="openFilter"
                >
                <hr class="my-2">
                {{-- topics --}}
                <div class="w-full">
                    <div class="text-base font-black text-gray-900 py-2">Field Of Interest</div>
                    <div class="form-check py-1 flex flex-nowrap border border-gray-300">
                        <select class=" outline-none border-0 focus:ring-0" wire:model="selected_topic_id">
                            <option>- Select Field of Interest -</option>
                            @foreach($field_of_interests as $field_of_interest)
                                <option value="{{ $field_of_interest->id }}">{{ $field_of_interest->name }}</option>
                            @endforeach
                        </select>
                    </div>
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
                {{-- <hr class="my-2"> --}}
                {{-- Ratings --}}
                {{-- <div class="w-full">
                    <div class="text-base font-black text-gray-900 py-2">Ratings</div>
                    <div class="form-check px-2 py-1">
                        <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                            type="radio" id="rdBtnRatings" name="ratings" wire:model="ratings" value="0"
                        >
                        <label class="form-check-label inline-block text-gray-800" for="rdBtnRatings">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= 4)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 h-4 w-4 text-yellow-400 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg> 
                                @else 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 h-4 w-4 text-gray-200 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg> 
                                @endif
                            @endfor
                        </label>
                        <p class="ml-2 text-xs inline-block">4.0 & up</p>
                    </div>
                    <div class="form-check px-2 py-1">
                        <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                            type="radio" id="rdBtnRatings" name="ratings" wire:model="ratings" value="1"
                        >
                        <label class="form-check-label inline-block text-gray-800" for="rdBtnRatings">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= 3)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 h-4 w-4 text-yellow-400 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg> 
                                @else 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 h-4 w-4 text-gray-200 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg> 
                                @endif
                            @endfor
                        </label>
                        <p class="ml-2 text-xs inline-block">3.0 & up</p>
                    </div>
                    <div class="form-check px-2 py-1">
                        <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                            type="radio" id="rdBtnRatings" name="ratings" wire:model="ratings" value="2"
                        >
                        <label class="form-check-label inline-block text-gray-800" for="rdBtnRatings">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= 2)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 h-4 w-4 text-yellow-400 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg> 
                                @else 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 h-4 w-4 text-gray-200 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg> 
                                @endif
                            @endfor
                        </label>
                        <p class="ml-2 text-xs inline-block">2.0 & up</p>
                    </div>
                </div> --}}
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
            <div class="flex-auto w-full p-4">
                @foreach($published_webinars as $webinar)
                    <div class="w-full flex flex-row border-t border-gray-200 py-4">
                        <div class="flex-none w-32 md:w-60">
                            <div class="relative flex flex-col items-center justify-center pt-12 pb-1/3">
                                <img src="{{ asset('storage/image/webinars/'.$webinar->image) }}" class="absolute w-full h-full object-cover border border-gray-200 inset-0">
                            </div>
                        </div>
                        <div class="flex-auto ml-4">
                            <div class="block my-1">
                                <p class="line-clamp-2 text-sm font-bold text-gray-800  tracking-wide w-full mb-0 p-0">
                                    {{ $webinar->title }}
                                </p>
                            </div>
                            <div class="block my-1">
                                <p class="text-xs text-gray-500 tracking-wide w-full mb-0 p-0 line-clamp-1">
                                    {{ $webinar->speaker }}
                                </p>
                            </div>
                            {{-- <div class="block my-1">
                                <div class="w-full mb-0 p-0 line-clamp-1">
                                    @foreach($webinar->fieldOfInterests as $val)
                                        <p class="text-xs text-gray-500 tracking-wide ">{{ $val->name }}</p>
                                    @endforeach
                                </div>
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

