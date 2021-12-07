<div class="w-full">
    <section class="relative flex items-center h-screen pt-16 header" style="max-height: 860px;">
        <div class="container flex flex-wrap items-center mx-auto">
            <div class="w-full px-4 md:w-8/12 lg:w-6/12 xl:w-6/12">

                @if(auth()->check())
                    <div class="pt-32 sm:pt-0">
                        @livewire('participant.headline-webinars-section')
                    </div>
                @else
                    <div class="pt-32 sm:pt-0">
                        <h2 class="text-4xl font-semibold text-blueGray-600">
                            Cavite State University Extension Services
                        </h2>
                        <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                            CavSU is a web-based platform that offers free Open Online Learning such as short courses and webinars from Instructors and Professors of Cavite State University - Carmona Campus. The main objective of the system is to provide an effective and efficient way to deliver education and training at the learner’s own space and time.
                        </p>
                        <div class="mt-12">
                            <a class="px-6 py-4 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear bg-green-500 rounded-sm shadow outline-none get-started focus:outline-none active:bg-green-600 hover:bg-gray-200 hover:text-gray-500" href="{{ route('register') }}">
                                Register for Free
                            </a>
                            <a class="px-6 py-4 mb-1 ml-1 mr-1 text-sm font-bold text-white uppercase bg-gray-700 rounded-sm shadow outline-none focus:outline-none active:bg-gray-600 hover:bg-gray-200 hover:text-gray-500" href="#upcoming_webinars">
                                See upcoming webinars
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <img class="absolute top-0 right-0 w-10/12 pt-16 -mt-48 b-auto sm:w-6/12 sm:mt-0 bg-gradient-to-b" src="{{ asset('storage/image/cavsu-statue-1.png') }}" alt="..." style="max-height: 860px;">
    </section>
</div>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.mySwiper', {
    direction: 'horizontal',
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>
