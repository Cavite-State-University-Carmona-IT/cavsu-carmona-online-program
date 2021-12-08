<div>
    {{-- Be like water. --}}

        <p class="mt-4 text-lg font-extrabold leading-relaxed text-gray-500">
            @if($upcoming_webinars->count() > 0)
                OUR UPCOMING WEBINARS
            @else
                OUR MOST VIEWED WEBINARS
            @endif
        </p>
        <div class="w-full h-full swiper mySwiper">
            <div class="swiper-wrapper">
                @if($upcoming_webinars->count() > 0)
                    @foreach($upcoming_webinars as $upcoming_webinar)
                    <a href="{{ url('webinar/'.$upcoming_webinar->title) }}" class="swiper-slide">
                        <img class="object-cover w-full mt-0 rounded-lg" src="{{ asset('storage/image/webinars/'.$upcoming_webinar->image) }}" alt="image" />
                    </a>
                    @endforeach
                @else
                    @foreach($most_viewed_webinars as $most_viewed_webinar)
                    <a href="{{ url('webinar/'.$most_viewed_webinar->title) }}" class=" swiper-slide">
                        <img class="object-cover w-full mt-0 rounded-lg" src="{{ asset('storage/image/webinars/'.$most_viewed_webinar->image) }}" alt="image" />
                        <div class="font-semibold text-white text-md absolute w-28 bg-gray-900 bg-opacity-50 rounded-r-2xl py-2.5 bottom-2 inset-x-0 text-left leading-4 pl-6">
                                <i class="fas fa-users"></i>
                                {{ $most_viewed_webinar->enrolled->count() }}
                        </div>
                    </a>
                    @endforeach
                @endif
            </div>
            <div class="swiper-pagination"></div>
        </div>

</div>
