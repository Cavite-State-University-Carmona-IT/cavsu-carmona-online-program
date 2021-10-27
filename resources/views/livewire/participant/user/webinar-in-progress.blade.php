<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <section class="max-w-full px-4 sm:px-4">
        <article >
            <h2 class="text-xl text-gray-900 font-semibold py-5 "><Strong>Webinars in Progress</Strong></h2>

            <section class="w-full space-y-4 sm:space-y-0 sm:grid grid-cols-2 gap-2 md:grid-cols-3 lg:grid-cols-4 border-0 bg-transparent ">
                <!-- ARTICLES -->
                @foreach($progressWebinars as $progressWebinar)
                    <article class="overflow-hidden border border-gray-300 bg-white  shadow-sm focus:outline-none " >
                        <div class="relative w-full h-80 md:h-64 lg:h-44">
                            <img src="{{ asset('storage/image/webinars/'.$progressWebinar->image) }}"
                                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                class="w-full h-full object-center object-cover">
                        </div>
                        @foreach($extensionServiceName as $extensionServiceNames)
                            @if($extensionServiceNames->id == $progressWebinar->extension_service_id)
                                <div class="px-4 py-4 grid grid-cols-5">
                                <div class="col-span-1">
                                    <img src="{{ asset('storage/image/extension-services/'.$extensionServiceNames->image) }}"
                                        alt="Done."
                                        class="w-30 h-auto object-center object-cover rounded-full">
                                </div>
                             @endif
                        @endforeach
                        <div class="col-span-4 pl-2">
                            <p class="text-sm font-semibold text-gray-900 group-hover:text-indigo-600">{{ $progressWebinar->title }}</p>
                            
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
            <div class="flex justify-end">
                <button class="relative p-2 md:h-90 lg:l-90 bg-transparent text-sm text-gray-800 hover:text-green-600"  wire:click="seeAll" 
                {{ $btnIs == 'hidden' ? 'hidden':'show' }}>
                    {{$buttonName}}
                </button>
            </div>

        </article>
    </section>

</div>
