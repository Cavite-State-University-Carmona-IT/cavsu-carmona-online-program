<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="flex flex-col justify-center">
        <p class="tracking-wide font-bold uppercase text-light-space-blue text-sm p-2">More Webinars</p>
        @foreach($webinars as $webinar)
            <a href="{{ url('webinar/'.$webinar->title) }}" class="cursor-pointer px-4 md:px-0 mx-auto md:mx-0 relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 py-4  my-2 border-t border-gray-200 bg-white">
                {{-- <div class="md:w-1/3 bg-white grid place-items-center ">
                    <img class="h-24 w-32 object-cover " src="{{ asset('storage/image/webinars/'.$webinar->image) }}" alt="tailwind logo" />
                </div> --}}
                {{-- <div class="w-full md:w-40">
                    <div class="relative flex flex-col items-center justify-center pt-12 pb-1/3">
                        <img src="{{ asset('storage/image/webinars/'.$webinar->image) }}" class="absolute w-full h-full object-cover border border-gray-200 inset-0">
                    </div>
                </div> --}}
                <div class="w-full md:w-40">
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
                <div class="w-full md:w-2/3 flex flex-col space-y-1">
                    <div class="block my-1">
                        <p class="line-clamp-2 text-base font-black text-gray-800  tracking-wide w-full mb-0 p-0">
                            {{ $webinar->title }}
                        </p>
                    </div>
                    <div class="block my-1 md:hidden">
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
                        <p class="text-gray-600 font-bold text-sm ml-1">
                            {{ $webinar->ratings() == 0 ? "0" : number_format($webinar->ratings(), 1, '.', '') }}
                            <span class="text-gray-500 font-normal">({{ $webinar->review()->count() }} ratings)</span>
                        </p>
                        {{-- <div class="">
                            <p class="text-gray-500 text-xs text-left ml-2 tracking-wide inline-block">{{ $webinar->ratings() == 0 ? "No" : number_format($webinar->ratings(), 1, '.', '') }} ({{ $webinar->review()->count() }} ratings)</p>
                            <p class="text-gray-500 text-xs text-left ml-2 tracking-wide inline-block">{{ $webinar->enrolled()->count() }} registered</p>
                            <p class="text-gray-500 text-xs text-left ml-4 tracking-wide inline-block"><i class="fas fa-calendar-alt fa-xs"></i> Date: {{ carbon\carbon::parse($webinar->date)->format('M d, Y') }}</p>
                        </div> --}}
                    </div>

                    {{--  --}}
                    {{-- <h3 class="font-black text-gray-800 text-base line-clamp-2">The Majestic and Wonderful Bahamas</h3>
                    <p class=" text-gray-500 text-sm">
                        Gezryl Gallego
                    </p>

                    <div class="flex justify-between item-center">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <p class="text-gray-600 font-bold text-sm ml-1">
                                4.96
                                <span class="text-gray-500 font-normal">(76 reviews)</span>
                            </p>
                        </div>
                        <p class="text-xl font-black text-gray-800">
                            FREE
                        </p>
                    </div> --}}
                </div>
            </a>
        @endforeach
    </div>

</div>
