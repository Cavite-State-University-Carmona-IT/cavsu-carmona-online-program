<nav class="fixed top-0 z-50 flex flex-wrap items-center justify-between w-full px-2 py-3 bg-white shadow-lg">
    <div class="container flex flex-wrap items-center justify-between px-4 mx-auto">
        <div class="relative flex justify-between w-full lg:w-auto lg:static lg:block lg:justify-start">
            <div class="container flex flex-wrap items-center justify-between px-4 mx-auto">
                <img src="{{asset('images/cvsulogo.png')}}" alt="" class="w-12 h-12 ">
                {{-- <a class="inline-block py-2 mr-4 text-sm font-bold leading-relaxed uppercase whitespace-nowrap text-blueGray-700" href="/learning-lab/tailwind-starter-kit/presentation">
                    Tailwind Starter Kit
                </a> --}}
                <!-- Navigation Links -->
                <div class="relative hidden sm:block sm:col-span-4 lg:col-span-3">
                    <div class="relative px-1 m-1 text-gray-600">
                        @livewire('participant.search-dropdown')
                        <div class="absolute top-0 right-0 pt-2 mr-5 ">
                            <i class="text-base text-gray-400 fas fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="items-center flex-grow hidden lg:flex" id="example-navbar-danger">
            <ul class="flex flex-col list-none lg:flex-row lg:ml-auto ">
                @if(Auth::check())
                @else
                    @if (Route::has('login'))
                        <li class="nav-item ">
                            <a href="{{ route('login') }}" class="inline-flex items-center p-3 mx-1 text-xs font-bold tracking-wide text-gray-600 uppercase transition bg-transparent bg-white rounded-sm hover:text-gray-500 download-button hover:bg-gray-100 focus:outline-none focus:bg-gray-100 active:bg-gray-100">
                                Login
                            </a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item ">
                            <a href="{{ route('register') }}" class="inline-flex items-center p-3 mx-1 text-xs font-bold tracking-wide text-white uppercase transition bg-transparent bg-gray-600 rounded-sm hover:text-gray-500 download-button hover:bg-gray-100 focus:outline-none focus:bg-gray-100 active:bg-gray-100">
                                Signup
                            </a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>
</nav>
