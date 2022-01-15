<div class="max-w-full lg:pt-5">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <section class="w-full px-10 py-14 md:px-28 bg-gray-200">

            <section class="grid grid-cols-1 gap-7 sm:grid-cols-2 md:grid-cols-3 md:gap-5 lg:grid-cols-5">
                @foreach($extension_services as $extension_service)
                    <article class="w-full bg-transparent">
                        <a href="{{ url('extension-service/'.$extension_service->link_name) }}" class="">
                            <img class="h-24 mb-6" src="{{ asset('storage/image/extension-services/'.$extension_service->image) }}"/>
                            <p class="font-bold">{{ $extension_service->name }}</p>
                            <p class="text-gray-500 text-xs tracking-wide">{{ $extension_service->details }}</p>
                        </a>
                    </article>
                @endforeach
            </section>
        </div>
    </section>
</div>
