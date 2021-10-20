
<div>
    {{-- Stop trying to control. --}}
    <section class="max-w-full px-4 sm:px-4">
        <article >
            <h2 class="text-2xl text-gray-900 font-semibold py-5 "><Strong>Webinars Completed</Strong></h2>
            
            <section class="w-full space-y-4 sm:space-y-0 sm:grid grid-cols-2 gap-2 md:grid-cols-3 lg:grid-cols-4 border border-green- bg-green-50 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300">
                
                <!-- ARTICLES -->
                
            
                
                @foreach($completedWebinars as $completedWebinar)
                    <article class="overflow-hidden border border-green-500 bg-green-50 rounded-md shadow-sm focus:outline-none " >
                        <div class="relative w-full h-80 md:h-64 lg:h-44">
                            <img src="{{ asset('storage/image/webinars/'.$completedWebinar->image) }}"
                                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                class="w-full h-full object-center object-cover">
                        </div>
                        @foreach($extensionServiceName as $extensionServiceNames)
                            @if($extensionServiceNames->id == $completedWebinar->extension_service_id)
                            <div class="px-4 py-4 grid grid-cols-5">
                            <div class="col-span-1 flex justify-center">
                                <img src="{{ asset('storage/image/extension-services/'.$extensionServiceNames->image) }}"
                                    alt="Done."
                                    class="w-30 h-30 object-center object-cover ">
                            </div>
                             @endif
                        @endforeach
                            <div class="col-span-4 pl-2">
                            <p
                                    class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                                    {{ $completedWebinar->title }}</p>
                                    Date Completed : {{ $completedWebinar->date_completed }}</p>
                                    
                                    Certificate : <p class= "text-base font-semibold text-blue-900 group-hover:text-indigo-600">  <a href="{{' ' .$completedWebinar->ecertificate_link }}">{{' ' .$completedWebinar->ecertificate_link }}</a>
                                    </p>
                                    
                                <span class="text-xs text-gray-500"></span>
                            </div>
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
            <button class="relative p-2 md:h-90 lg:l-90 bg-transparent "  wire:click="seeAll">{{$buttonName}}</button>
            </div>
            
        </article>
    </section>
    
</div>
