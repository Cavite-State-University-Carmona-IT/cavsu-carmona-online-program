<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="grid w-full grid-cols-8">
        <div class="col-span-6 col-start-2">
            <main class="flex items-center justify-center">
                <div class="text-2xl text-center">Webinars</div>
            </main>
            <div class="flex w-full mb-5">
                <div class="relative w-full text-gray-600 md:m-3">
                    <input wire:model="search" type="search" name="serch" placeholder="Search" class="w-full h-full px-5 pr-10 text-sm transition-shadow bg-white border-0 rounded-full focus:outline-none focus:ring-0 focus:shadow">
                    <div class="absolute top-0 right-0 mt-3 mr-4">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                    </svg>
                    </div>
                </div>
                <div class="md:m-3">
                    <button class="p-2 pl-5 pr-5 text-lg text-gray-100 transition-colors duration-700 transform bg-green-500 border-indigo-300 rounded-full hover:bg-blue-400 focus:border-4">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            @if($webinars->count() == 0)
                <div class="w-full px-14">
                    <div class="text-2xl font-bold ">Sorry, we couldn't find any results for {{ $search }}</div>
                    <br>
                    <div class="font-semibold text-md ">Try adjusting your search. Here are some ideas:</div>
                    <div class="text-sm">Make sure all words are spelled correctly</div>
                    <div class="text-sm">Try different search terms</div>
                    <div class="text-sm">Try more general search terms</div>
                <div>
            @endif
            <div class="grid grid-cols-1 md:grid-cols-3">
                <!-- card -->
                @foreach($webinars as $webinar)
                    <div class="p-3">
                        <div class="m-auto overflow-hidden transition duration-500 ease-in-out transform rounded-lg shadow-lg cursor-pointer hover:-translate-y-5 hover:shadow-2xl h-90 w-60 md:w-80">
                            <a href="#" class="block w-full h-full">
                                <img alt="blog photo" src="{{ asset('storage/image/webinars/'.$webinar->image) }}" class="object-cover w-full max-h-40"/>
                                <div class="w-full p-4 bg-white">
                                    <p class="h-20 pt-1 font-medium text-indigo-500 line-clamp-3">
                                        {{ $webinar->title }}
                                    </p>
                                    <p class="mb-2 text-sm font-medium text-gray-800 truncate">
                                        {{ $webinar->speaker }}
                                    </p>
                                    <p class="text-sm font-light text-gray-600 text-md line-clamp-3">
                                        {{ $webinar->about }}
                                        {{-- <i class="mr-2 text-blue-500 fas fa-circle"></i>pending</td> --}}
                                    </p>

                                    <br>

                                    <div class="flex justify-between pb-2">
                                        <div>
                                            <span class="text-xs text-gray-500">{{ Carbon\Carbon::parse($webinar->date)->format('Y M d') }}</span>
                                        </div>
                                        @if($webinar->status == 1)
                                            <span class="inline-block px-2 py-1 mr-3 text-xs font-bold text-white bg-blue-500 rounded-full">
                                                <i class="far fa-circle"></i>
                                                pending
                                            </span>
                                        @elseif($webinar->status == 2)
                                            <span class="inline-block px-2 py-1 mr-3 text-xs font-bold text-white bg-green-500 rounded-full">
                                                <i class="fas fa-check-circle"></i>
                                                published
                                            </span>
                                        @elseif($webinar->status ==3 )
                                            <span class="inline-block px-2 py-1 mr-3 text-xs font-bold text-white bg-red-500 rounded-full">
                                                <i class="fas fa-times-circle"></i>
                                                deleted
                                            </span>
                                        @endif
                                    </div>

                                    <hr>

                                    <div class="flex items-center justify-center w-full py-4 divide-x divide-gray-400 divide-solid">
                                        <span class="px-2 text-center">
                                            <span class="text-sm font-bold text-gray-700">{{ $webinar->enrolled()->count() }}</span>
                                            <span class="text-xs text-gray-600"> enrolled</span>
                                        </span>
                                        <span class="px-2 text-center">
                                            <span class="text-sm font-bold text-gray-700">{{ $webinar->completed()->count() }}</span>
                                            <span class="text-xs text-gray-600"> completed</span>
                                        </span>
                                        <span class="px-2 text-center">
                                            <span class="text-sm font-bold text-gray-700">{{ $webinar->review()->count() }}</span>
                                            <span class="text-xs text-gray-600"> reviews</span>
                                        </span>
                                    </div>

                                    {{-- <div class="flex flex-wrap items-center py-3 text-xs font-medium text-white border-b-2 justify-starts">
                                        <span class="px-2 py-1 m-1 bg-indigo-500 rounded">
                                            #online
                                        </span>
                                        <span class="px-2 py-1 m-1 bg-indigo-500 rounded">
                                            #internet
                                        </span>
                                        <span class="px-2 py-1 m-1 bg-indigo-500 rounded">
                                            #education
                                        </span>
                                    </div> --}}
                                    {{-- <div class="flex items-center mt-2">
                                        <img class='object-cover w-10 h-10 rounded-full' alt="{{ $webinar->extensionService()->name }} logo" src="{{ asset('storage/image/extension-services/'.$webinar->extensionService()->image) }}">

                                        <div class="pl-3">
                                            <p class="text-sm font-medium">
                                                {{ $webinar->extensionService()->name }}
                                            </p>
                                            <div class="text-sm text-gray-600">
                                                {{ $webinar->extensionService()->department()->name }}

                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-end">
                <button class="relative p-2 text-sm text-gray-800 bg-transparent md:h-90 lg:l-90 hover:text-green-600"  wire:click="seeMore"
                {{ $btnIs == 'hidden' ? 'hidden':'show' }}>
                    {{ $btnName }}
                </button>
            </div>
        </div>
    </div>

</div>
