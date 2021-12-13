<nav class="fixed top-0 z-40 flex flex-wrap items-center justify-between w-full px-6 py-3 mx-auto bg-white shadow-lg">
    <div class="container flex flex-wrap items-center justify-between px-4 mx-auto">
        <div class="relative flex justify-between w-full lg:w-auto lg:static lg:block lg:justify-start">
            <div class="container flex flex-wrap items-center justify-between px-4 mx-auto">
                <a href="{{ url('/') }}">
                    <img src="{{asset('images/cvsulogo.png')}}" alt="" class="w-12 h-12 ">
                </a>
                {{-- <a class="inline-block py-2 mr-4 text-sm font-bold leading-relaxed uppercase whitespace-nowrap text-blueGray-700" href="/learning-lab/tailwind-starter-kit/presentation">
                    Tailwind Starter Kit
                </a> --}}
                <!-- Navigation Links -->
                @livewire('participant.categories-section')
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
                <div class="hidden sm:col-span-2 sm:flex sm:justify-end"> <!-- SM TO LG -->
                    <div class="flex items-center ">
                        {{-- <div class="text-sm text-gray-500">
                            <a href="">Completed</a>
                        </div> --}}
                        <!-- Settings Dropdown -->
                        <div class="relative ml-3">
                            <x-jet-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                            <img class="object-cover w-8 h-8 rounded-full" src="{{ asset('storage/image/users/'.Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->profile_photo_path }}" />
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                                {{ Auth::user()->first_name . " " . Auth::user()->last_name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">

                                    @if(auth()->user()->hasRole('program_coordinator'))
                                        {{-- Program Coordinator --}}
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Program Coordinator') }}
                                        </div>
                                        {{-- Divider --}}
                                        <div class="mx-3 border-t border-gray-100"></div>
                                        {{-- Dashboard --}}
                                        <x-jet-dropdown-link href="#">
                                            {{ __('Dashboard') }}
                                        </x-jet-dropdown-link>
                                        {{-- Webinars --}}
                                        <x-jet-dropdown-link href="#">
                                            {{ __('Webinars') }}
                                        </x-jet-dropdown-link>
                                        {{-- Reports --}}
                                        <x-jet-dropdown-link href="#">
                                            {{ __('Reports') }}
                                        </x-jet-dropdown-link>
                                        {{-- Others --}}
                                        <x-jet-dropdown-link href="#">
                                            {{ __('Others') }}
                                        </x-jet-dropdown-link>
                                    @endif

                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>
                                    {{-- Divider --}}
                                    <div class="mx-3 border-t border-gray-100"></div>
                                    {{-- Profile --}}
                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>

                                    {{-- My Learning --}}
                                    <x-jet-dropdown-link href="#">
                                        {{ __('My Learning') }}
                                    </x-jet-dropdown-link>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    </div>
                    <!-- Hamburger -->
                    <div class="flex items-center justify-end sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition rounded-md mobile-menu-button hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- MOBILE NAV -->
                <div class="max-w-full mobile-menu sm:hidden">
                    <div class="w-full pt-8">
                        <div class="ml-3 text-sm text-gray-500">
                            <a href="">My Learning</a>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="relative m-1 text-gray-600">
                            @livewire('participant.search-dropdown')
                            <div class="absolute top-0 right-0 pt-2 mr-3 ">
                                <i class="text-xl text-gray-400 fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <a href="{{ route('register') }}" class="inline-flex items-center p-3 mx-1 text-xs font-bold tracking-wide text-gray-100 uppercase transition rounded-sm bg-light-space-blue hover:text-gray-500 download-button hover:bg-gray-100 focus:outline-none focus:bg-gray-100 active:bg-gray-100">
                                Signup
                            </a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>

</nav>
