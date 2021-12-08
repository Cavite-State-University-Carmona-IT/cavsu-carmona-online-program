<div class="w-full my-32">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="text-center">
        <p class="mt-4 text-lg font-extrabold leading-relaxed text-gray-500">
            WEBINARS
        </p>
    </div>
    <div class="relative flex flex-wrap justify-center m-3 mx-auto">
        <div class="gap-5 space-y-4 lg:px-32 md:px-4 md:grid md:grid-cols-3 sm:grid-cols-3 lg:grid-cols-4 md:space-y-0">
            @foreach($published_webinars as $published_webinar)
                <div class="max-w-sm p-2 transition duration-500 transform bg-white shadow-md rounded-3xl hover:scale-105">
                    <div class="relative">
                        <img class="w-full rounded-2xl" src="{{ asset('storage/image/webinars/'.$published_webinar->image) }}" alt="Colors" />
                    </div>
                    <h1 class="h-20 mt-4 font-semibold text-gray-700 cursor-pointer line-clamp-3">
                        {{ $published_webinar->title }}
                    </h1>
                    <div class="mb-4">
                        <div class="flex items-center space-x-1">
                            <span class="text-indigo-600"><i class="far fa-clock"></i></span>
                            <p>Minutes: {{ $published_webinar->duration }}</p>
                        </div>
                        <div class="flex items-center space-x-1">
                            <span class="text-indigo-600"><i class="far fa-user"></i></span>
                            <p class="line-clamp-1">Speaker: {{ $published_webinar->speaker }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
