<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    {{-- <div class="max-w-full">
        <div class="w-full sm:px-2 md:px-8 lg:px-10">
            <div class="grid grid-cols-5 py-20 space-y-3">
                <div class="col-span-3">
                    <img src="{{ asset('storage/image/webinars/'.$this->webinar->image) }}"
                        alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                        class="object-cover object-center w-full">
                </div>
                <div class="w-full col-span-2 py-5 space-y-5 lg:px-5">
                    <div class="w-full px-3 mb-5 space-y-2 lg:px-0">
                        <h1 class="font-bold lg:text-xl">{{ $this->webinar->title }}</h1>
                        <div class="space-y-1 lg:space-y-5 lg:py-5">
                            <h6 class="text-sm font-light text-gray-500 lg:text-base">With few lectures I tried my best to make your concept clear regarding Asterisk ith few lectures I tried my best to make your concept clear regarding Asterisk
                            ith few lectures I tried my best to make your concept clear regarding Asterisk
                            ith few lectures I tried my best to make your concept clear regarding Asterisk
                            </h6>
                            <h6 class="text-xs font-light text-gray-500 lg:text-sm">Extension Service</h6>
                        </div>
                    </div>
                    <div class="w-full lg:mt-20">
                        <button class="w-full px-2 py-3 font-semibold text-white bg-green-800">Enroll Now</button>
                    </div>
                </div>
            </div>


            <div class="w-full py-3 border-b">
                <div class="flex px-5 text-sm space-x-7 lg:space-x-10 lg:px-0">
                    <h3 class="font-semibold ">Objectives</h3>
                    <h3 class="font-semibold text-gray-500">About</h3>
                    <h3 class="font-semibold text-gray-500">Reviews</h3>
                    <h3 class="font-semibold text-gray-500">Host</h3>
                </div>
            </div>

            <div class="w-full px-5 py-5 lg:px-0">
                <ul class="text-sm text-gray-500 list-disc">At the end of my course students will be able to have some basic knowledge regarding Asterisk and how to use it in better way.</ul>
            </div>

            <section class="max-w-full px-4 sm:px-4 md:px-0">
                <article >
                    <h2 class="py-5 font-semibold text-gray-900">More Courses</h2>
                </article>
            </section>
        </div>
    </div> --}}
    @if($webinar != null)
        <div class="max-w-full mt-16">
            <div class="grid w-full grid-cols-3 pt-2">
                <div class="col-span-2 col-start-1 bg-white border-r-2 border-gray-300 p-7">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe src="https://www.youtube.com/embed/{{ $webinar->video_link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-span-1">
                    webinar suggestion to (wip)
                </div>
            </div>
        </div>
    @else
        {{-- component 404 not found --}}
        <div class="pt-32">
            404 NOT FOUND
        </div>
    @endif
</div>
