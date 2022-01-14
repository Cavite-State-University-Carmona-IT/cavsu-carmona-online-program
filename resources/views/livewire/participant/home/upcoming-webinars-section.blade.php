<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div id="upcoming_webinars_section" class="w-full bg-white h-full p-8">
        <div class="text-xl tracking-wide text-gray-800 font-black">Upcoming Webinars</div>
        <div class="border border-gray-300 p-3 w-full flex flex-row flex-wrap md:flex-nowrap md:overflow-x-auto h-full">
            @foreach($webinars as $webinar)
            <a href="{{ url('webinar/'.$webinar->title) }}"
                class="mx-auto md:mx-2 min-w-60 w-60 h-full p-3 transition-transform border border-transparent hover:border-gray-200 hover:shadow-lg"
                >
                <label class="flex flex-col w-full hover:bg-gray-100">
                    <div class="relative flex flex-col items-center justify-center pt-12 pb-2/5">
                        <img src="{{ asset('storage/image/webinars/'.$webinar->image) }}" class="absolute w-full h-full object-cover border border-gray-200 inset-0">
                    </div>
                </label>
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
                <div class="block my-1">
                    <div class="flex flex-row">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-1 h-4 w-4 text-yellow-400 inline-block" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg> 
                        <p class="text-xs text-yellow-500 tracking-wide text-left ml-1 mt-1 font-bold">{{ $webinar->ratings() == 0 ? '' : number_format($webinar->ratings(), 1, '.', '') }}</p>
                        <p class="text-xs text-gray-500 tracking-wide text-left ml-2 mt-1">({{ $webinar->review()->count() }} ratings)</p>
                        <p class="text-xs text-gray-500 tracking-wide text-left ml-2 mt-1">{{ $webinar->enrolled()->count() }} registered</p>
                    </div>
                </div>
                <div class="block my-1">
                    <p class="text-base text-gray-800 font-black w-full mb-0 p-0 line-clamp-1">
                        {{ $webinar->price ? '₱' . $webinar->price : 'FREE' }}
                    </p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
