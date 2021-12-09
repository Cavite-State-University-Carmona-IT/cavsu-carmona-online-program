<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    {{-- <div class="max-w-full">
        <div class="w-full sm:px-2 md:px-8 lg:px-10">
            <div class="py-20 space-y-3 grid grid-cols-5">
                <div class="col-span-3">
                    <img src="{{ asset('storage/image/webinars/'.$this->webinar->image) }}"
                        alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                        class="w-full object-center object-cover">
                </div>
                <div class="w-full space-y-5 py-5 lg:px-5 col-span-2">
                    <div class="w-full px-3 space-y-2 mb-5 lg:px-0">
                        <h1 class="font-bold lg:text-xl">{{ $this->webinar->title }}</h1>
                        <div class="space-y-1 lg:space-y-5 lg:py-5">
                            <h6 class="text-sm text-gray-500 font-light lg:text-base">With few lectures I tried my best to make your concept clear regarding Asterisk ith few lectures I tried my best to make your concept clear regarding Asterisk
                            ith few lectures I tried my best to make your concept clear regarding Asterisk
                            ith few lectures I tried my best to make your concept clear regarding Asterisk
                            </h6>
                            <h6 class="text-xs text-gray-500 font-light lg:text-sm">Extension Service</h6>
                        </div>
                    </div>
                    <div class="w-full lg:mt-20">
                        <button class="w-full bg-green-800 text-white font-semibold py-3 px-2">Enroll Now</button>
                    </div>
                </div>
            </div>


            <div class="w-full py-3 border-b">
                <div class="flex space-x-7 px-5 text-sm lg:space-x-10 lg:px-0">
                    <h3 class="font-semibold ">Objectives</h3>
                    <h3 class="text-gray-500 font-semibold">About</h3>
                    <h3 class="text-gray-500 font-semibold">Reviews</h3>
                    <h3 class="text-gray-500 font-semibold">Host</h3>
                </div>
            </div>

            <div class="w-full px-5 py-5 lg:px-0">
                <ul class="text-gray-500 text-sm list-disc">At the end of my course students will be able to have some basic knowledge regarding Asterisk and how to use it in better way.</ul>
            </div>

            <section class="max-w-full px-4 sm:px-4 md:px-0">
                <article >
                    <h2 class="text-gray-900 font-semibold py-5">More Courses</h2>
                </article>
            </section>
        </div>
    </div> --}}
    @if($webinar != null)
        <div class="max-w-full mt-16">
            <div class="bg-gray-900 h-80 w-full">
            </div>
            <div class="text-center absolute w-full" style="top: 60px">
                <div class="mt-20 px-28 grid grid-cols-3">
                    {{-- webinar basic details --}}
                    <div class="col-span-2">
                        <p class=" text-white tracking-wide uppercase text-lg font-bold">Witch</p>
                        <p class="text-gray-100 text-sm">@witch_forever</p>
                    </div>
                    {{-- overlap card: image --}}
                    <div class="bg-white col-span-1 rounded-3xl rounded-b-none p-3 shadow-lg">
                        <img class="rounded-2xl w-full" src="{{ asset('storage/image/webinars/'.$webinar->image) }}"/>

                        <p class="text-3xl font-bold text-gray-800 p-4 text-left tracking-wide">
                            @if($webinar->price == 0 || $webinar->price == null)
                                FREE
                            @else
                                ₱ {{ $webinar->price }}
                            @endif
                        </p>
                        <button class="p-2 w-full text-sm  transition ease-in duration-200 focus:outline-none bg-green-600 text-white tracking-wide font-semibold">
                            @if($webinar->price == 0 || $webinar->price == null)
                                REGISTER FOR FREE
                            @else
                                ₱ {{ $webinar->price }}
                            @endif
                        </button>
                    </div>
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
