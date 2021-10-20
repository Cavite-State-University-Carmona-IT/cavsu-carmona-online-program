
<div>
    {{-- Stop trying to control. --}}
    <section class="max-w-full px-4 sm:px-4">
        <article >
            <h2 class="text-xl text-gray-900 font-semibold py-5 "><Strong>Webinars Completed</Strong></h2>

            <section class="w-full space-y-4 sm:space-y-0 sm:grid grid-cols-2 gap-2 md:grid-cols-3 lg:grid-cols-4 border-0 bg-transparent ">
                <!-- ARTICLES -->
                @foreach($completedWebinars as $completedWebinar)
                    <article class="overflow-hidden border border-gray-300 bg-white  shadow-sm focus:outline-none " >
                        <div class="relative w-full h-80 md:h-64 lg:h-44">
                            <img src="{{ asset('storage/image/webinars/'.$completedWebinar->image) }}"
                                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                class="w-full h-full object-center object-cover">
                        </div>
                        @foreach($extensionServiceName as $extensionServiceNames)
                            @if($extensionServiceNames->id == $completedWebinar->extension_service_id)
                                <div class="px-4 py-4 grid grid-cols-5">
                                <div class="col-span-1">
                                    <img src="{{ asset('storage/image/extension-services/'.$extensionServiceNames->image) }}"
                                        alt="Done."
                                        class="w-30 h-auto object-center object-cover rounded-full">
                                </div>
                             @endif
                        @endforeach
                        <div class="col-span-4 pl-2">
                            <p class="text-sm font-semibold text-gray-900 group-hover:text-indigo-600">{{ $completedWebinar->title }}</p>
                            <p class="text-gray-900"><small>Date Completed: {{ carbon\carbon::parse($completedWebinar->date_completed)->format('M d, Y') }}</small></p>
                            <p class="text-gray-900"><a class="text-blue-600" href="{{' ' .$completedWebinar->ecertificate_link }}"><small>View Certificate</small></a></p>
                        </div>
                    </article>
                        @if($limitIsActive == false)

                            @continue

                        @else

                            @if ($loop->iteration == 8)

                                @break

                            @endif

                        @endif


                    @endforeach
              <!-- ARTICLES END-->
            </section>
                <style>
                    #container{
                        text-align: right;
                        visibility: {{$btnIs}};
                    }
                </style>
            <div id="container">
                <button class="relative p-2 md:h-90 lg:l-90 bg-transparent text-sm text-gray-800 hover:text-green-600"  wire:click="seeAll">{{$buttonName}}</button>
            </div>

        </article>
    </section>

</div>
