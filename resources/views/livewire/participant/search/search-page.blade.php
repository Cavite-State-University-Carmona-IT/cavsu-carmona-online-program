{{--
<div class="max-w-full p-2 sm:px-5 sm:py-10">
   <div classw="w-11/12 border mx-auto">
        <div class="flex items-center justify-between w-full text-sm">
            <h1 class="font-semibold">Your Recent Views</h1>
            <h1 class="text-gray-400">Clear History</h1>
        </div>
       <div class="w-full py-5 mt-3 space-y-1 border lg:space-y-3">
                <div class="w-full">
                        <div class="grid w-full grid-cols-5 px-2">
                            <div class="flex items-center col-span-1 sm:justify-center">
                                <img src="https://cdn.pixabay.com/photo/2021/07/24/01/42/zebra-dove-6488440_960_720.jpg"
                                    alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                    class="object-cover object-center w-18 h-14 lg:w-52 lg:h-36">
                            </div>
                            <div class="flex items-center col-span-4 py-5">
                                <div class="w-full pl-2">
                                    <h3 class="text-sm font-semibold"> ex. Lorem Ipsum is simply dummy text of the</h3>
                                    <h5 class="text-xs text-gray-600">Lorem Ipsum is simply dummy text of the</h5>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="w-full">
                        <div class="grid w-full grid-cols-5 px-2">
                            <div class="flex items-center col-span-1 sm:justify-center">
                                <img src="https://cdn.pixabay.com/photo/2021/07/24/01/42/zebra-dove-6488440_960_720.jpg"
                                    alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                    class="object-cover object-center w-18 h-14 lg:w-52 lg:h-36">
                            </div>
                            <div class="flex items-center col-span-4 py-5">
                                <div class="w-full pl-2">
                                    <h3 class="text-sm font-semibold"> Lorem Ipsum is simply dummy text of the</h3>
                                    <h5 class="text-xs text-gray-600">Lorem Ipsum is simply dummy text of the</h5>
                                </div>
                            </div>
                        </div>
                </div>

       </div>


       <!-- NO RESULT -->
       <div class="max-w-full px-2 py-4 border lg:px-10">
          <div class="w-full">
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
       </div>
        <!-- NO RESULT -->

        <!-- RESULT -->
        <div class="w-full px-3 py-5 mt-3 space-y-1 border">
            <div class="text-sm font-semibold lg:px-5">
                <h1>2 Results for "Webinars"</h1>
            </div>
            <div class="w-full py-5 space-y-3 lg:px-10">
                <div class="grid w-full grid-cols-5 px-2">
                    <div class="flex items-center col-span-1 sm:justify-center">
                        <img src="https://cdn.pixabay.com/photo/2021/07/24/01/42/zebra-dove-6488440_960_720.jpg"
                            alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                            class="object-cover object-center w-18 h-14 lg:w-52 lg:h-36">
                    </div>
                    <div class="flex items-center col-span-4">
                        <div class="w-full pl-2 lg:pl-8">
                            <h3 class="text-sm font-semibold"> Lorem Ipsum is simply dummy text of the</h3>
                            <h5 class="text-xs text-gray-600">Lorem Ipsum is simply dummy text of the</h5>
                            <h6 class="py-1 text-xs">Total hours(s)</h6>
                        </div>
                    </div>
                </div>
                <div class="grid w-full grid-cols-5 px-2">
                    <div class="flex items-center col-span-1 sm:justify-center">
                        <img src="https://cdn.pixabay.com/photo/2021/07/24/01/42/zebra-dove-6488440_960_720.jpg"
                            alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                            class="object-cover object-center w-18 h-14 lg:w-52 lg:h-36">
                    </div>
                    <div class="flex items-center col-span-4">
                        <div class="w-full pl-2 lg:pl-8">
                            <h3 class="text-sm font-semibold"> Lorem Ipsum is simply dummy text of the</h3>
                            <h5 class="text-xs text-gray-600">Lorem Ipsum is simply dummy text of the</h5>
                            <h6 class="py-1 text-xs">Total hours(s)</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- RESULT -->
   </div>
</div> --}}

<div>
    {{-- In work, do what you enjoy. --}}
    <div class="max-w-full">
        <div class="w-full">
            <div class="overflow-hidden ">
                <div class="w-full">
                    <section class="relative px-10 pt-20 header" style="max-height: 860px;">
                        <div class="p-10 bg-white border-gray-400" style="border-width: 1px;">

                            @if($this->webinar_results->count() > 0)
                                {{-- WITH SEARCH RESULTS --}}
                                <p class="text-3xl font-bold">
                                    {{ $this->webinar_results->count() }} results for “{{ $searchValue }}“
                                </p>
                            @else
                                {{-- WITHOUT SEARCH RESULTS --}}
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <h1 class="text-xl font-bold">Sorry, we couldn’t find any results for “{{ $searchValue }}“</h1>
                                        <h3 class="text-sm font-semibold font">Try adjusting your search. Here are some ideas:</h3>
                                    </div>
                                    <div class="w-full py-5 pl-8 text-sm">
                                        <ul class="list-disc">
                                            <li>Make sure all words are spelled correctly</li>
                                            <li>Try different search term</li>
                                            <li>Try more general search terms</li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </section>
                </div>
            </div>
            {{-- webinars --}}
            <div class="relative flex flex-wrap justify-center m-3 mx-auto">
                <div class="gap-5 space-y-4 lg:px-32 md:px-4 md:grid md:grid-cols-3 sm:grid-cols-3 lg:grid-cols-4 md:space-y-0">
                    @foreach($this->webinar_results as $webinar_result)
                        <div class="max-w-sm p-2 transition duration-500 transform bg-white shadow-md rounded-3xl hover:scale-105">
                            <div class="relative">
                                <img class="w-full rounded-2xl" src="{{ asset('storage/image/webinars/'.$webinar_result->image) }}" alt="Colors" />
                            </div>
                            <h1 class="h-20 mt-4 font-semibold text-gray-700 cursor-pointer line-clamp-3">
                                {{ $webinar_result->title }}
                            </h1>
                            <div class="mb-4">
                                <div class="flex items-center space-x-1">
                                    <span class="text-indigo-600"><i class="far fa-clock"></i></span>
                                    <p>Minutes: {{ $webinar_result->duration }}</p>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <span class="text-indigo-600"><i class="far fa-user"></i></span>
                                    <p class="line-clamp-1">Speaker: {{ $webinar_result->speaker }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
