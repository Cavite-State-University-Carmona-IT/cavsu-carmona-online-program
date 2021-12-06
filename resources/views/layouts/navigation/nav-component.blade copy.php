<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full px-4 py-5 sm:px-2 md:py-2 lg:px-8">
        <div class="grid grid-cols-2 sm:grid-cols-5">
            <div class="grid-cols-5 sm:col-span-3 sm:grid">
                <!-- Logo -->
                <div class="flex items-center sm:col-span-1 lg:justify-center">
                    <a href="{{ url('/') }}">
                    <img src="{{asset('images/cvsulogo.png')}}" alt="" class="w-16 h-16">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="relative hidden sm:block sm:col-span-4 lg:col-span-3">
                    <div class="relative px-1 py-2 m-1 text-gray-600">
                        @livewire('participant.search-dropdown')
                        <div class="absolute top-0 right-0 pt-4 mr-5 ">
                            <i class="text-xl text-gray-400 fas fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- USER --}}
            @if(Auth::check())
                {{-- Navigation --}}
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
                <div class="hidden sm:col-span-2 sm:flex sm:justify-end"> <!-- SM TO LG -->
                    <div class="flex items-center ">
                        @if (Route::has('login'))
                            <div class="flex w-full">
                                <a href="{{ route('login') }}"    class="inline-flex items-center px-3 py-2 mx-1 text-sm font-medium leading-4 text-gray-700 transition bg-transparent rounded-sm hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 active:bg-gray-100">
                                    Log in
                                </a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 mx-1 text-sm font-medium leading-4 text-white transition bg-green-600 rounded-sm hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 active:bg-gray-100">
                                    Sign Up
                                </a>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>

            @endif
        </div>

</nav>
