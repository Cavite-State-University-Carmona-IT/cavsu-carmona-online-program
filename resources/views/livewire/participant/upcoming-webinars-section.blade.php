<p class="mt-4 text-lg font-extrabold leading-relaxed text-gray-500">
    OUR UPCOMING WEBINARS
</p>
<div class="w-full h-full swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach($upcoming_webinars as $upcoming_webinar)
        <a href="{{ url('webinar/'.$upcoming_webinar->title) }}" class="swiper-slide">
            <img
            class="object-cover w-full rounded-lg"
            src="{{ asset('storage/image/webinars/'.$upcoming_webinar->image) }}"
            alt="image"
            />
        </a>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
