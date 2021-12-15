<nav class="fixed top-0 z-40 flex flex-wrap items-center justify-between w-full py-3 mx-auto bg-white border-b-2 border-gray-200 md:px-6">

    {{-- mobile:menu --}}
    <div x-data="{ isOpenMenu: false }" @click.away="isOpenMenu = false">
        <button class="px-5 border-0 focus:outline-none md:hidden" x-on:click="isOpenMenu = ! isOpenMenu;">
            <i class="fas fa-bars text-light-space-blue"></i>
        </button>

        {{-- mobile:menu --}}
        <div  class="fixed top-0 z-40 w-96 md:hidden"
            x-show="isOpenMenu"
            x-transition.duration.500ms
            {{-- @click.away="isOpenMenu = false" --}}
            >
            <div class="grid h-screen grid-cols-10">
                {{-- close menu button --}}
                <div class="z-50 flex justify-center w-full col-start-8 col-end-10 py-4 row-span-full">
                    <button x-on:click="isOpenMenu = false" class="w-10 h-10 bg-white border border-gray-300 rounded-full shadow-lg focus:outline-none">
                        <i class="w-5 fas fa-times text-light-space-blue"></i>
                    </button>
                </div>

                {{-- main menu --}}
                <div class="w-full col-span-8 col-start-1 bg-white border-r border-gray-200 shadow-sm drop-shadow-sm row-span-full"
                    x-data="dataMenuOpen()"
                    >
                    {{-- menu:content --}}
                    <div x-show="isOpenMenuContent"
                        class="flex flex-col h-screen p-3"
                        >
                        <div class="flex flex-col mb-auto" >
                            {{-- profile --}}
                            @if(auth()->user())
                                <div class="flex justify-between w-full pt-4 cursor-pointer" @click="isOpenProfileContent = ! isOpenProfileContent; isOpenMenuContent = false">
                                    <div class="flex flex-initial">
                                        {{-- profile picture --}}
                                        <img class="flex-none object-cover w-20 h-20 m-2 border border-gray-400 rounded-full shadow-lg" src="{{ asset('storage/image/users/'.auth()->user()->profile_photo_path) }}"/>
                                        {{-- user info --}}
                                        <div class="m-2 ">
                                            <p class="flex-initial font-semibold tracking-wide text-gray-800 line-clamp-2">Hi, {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</p>
                                            <p class="flex-initial text-sm tracking-wide text-gray-400">{{ '@' . auth()->user()->username }}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-none">
                                        <button class="focus:outline-none">
                                            <i class="w-5 fas fa-chevron-right text-light-space-blue"></i>
                                        </button>
                                    </div>
                                </div>
                                {{-- divider --}}
                                <hr>
                            @endif

                            <div class="">
                                <p>Extension Services</p>
                                <ul>
                                    <li>Barangay Entreprenyur</li>
                                    <li>Barangay Entreprenyur</li>
                                    <li>Barangay Entreprenyur</li>
                                    <li>Barangay Entreprenyur</li>
                                </ul>
                            </div>
                        </div>
                        {{-- menu:footer --}}
                        @if(!auth()->user())
                            @if (Route::has('login') || Route::has('register'))
                                <div class="grid h-10 grid-cols-2 gap-4">
                                    @if (Route::has('login'))
                                        <a href="{{ route('login') }}" class="flex justify-center w-full p-3 text-xs font-bold tracking-wide uppercase transition bg-transparent bg-white border text-light-space-blue border-light-space-blue hover:text-gray-100 hover:border-light-space-blue hover:bg-light-space-blue focus:outline-none focus:bg-gray-100 active:bg-gray-100">
                                            Login
                                        </a>
                                    @endif
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"  class="flex justify-center w-full p-3 text-xs font-bold tracking-wide uppercase transition bg-transparent bg-white border text-light-space-blue border-light-space-blue hover:text-gray-100 hover:border-light-space-blue hover:bg-light-space-blue focus:outline-none focus:bg-gray-100 active:bg-gray-100">
                                            Signup
                                        </a>
                                    @endif
                                </div>
                            @endif
                        @endif
                    </div>

                    {{-- profile:content --}}
                    <div x-show="isOpenProfileContent"
                        class="flex flex-col h-screen p-3"
                        >
                        <div class="flex w-full p-3 cursor-pointer" @click="isOpenProfileContent = false; isOpenMenuContent = true">
                            <div class="flex items-center flex-none">
                            <i class="text-gray-600 p-auto fas fa-chevron-left"></i>
                            </div>
                            <p class="flex-initial ml-5 text-sm font-semibold tracking-wide text-gray-600">Back to Menu</p>
                        </div>
                        <hr>
                    </div>



                </div>
            </div>

        </div>
    </div>

    {{--  --}}
    <div class="flex flex-wrap items-center justify-between px-4 mx-auto md:container">
        <div class="relative flex justify-between w-full lg:w-auto lg:static lg:block lg:justify-start">
            <div class="container flex flex-wrap items-center justify-center px-4 mx-auto md:justify-between">
                <div class="flex">
                    <a href="{{ url('/') }}" class="flex-none">
                        <img src="{{asset('images/cvsulogo.png')}}" alt="" class="w-12 h-12 ">
                    </a>
                    <div class="flex-none">
                        @livewire('participant.categories-section')
                    </div>
                </div>
                <div class="relative hidden md:block sm:col-span-4 lg:col-span-3">
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

    {{-- mobile:search --}}
    <div x-data="{ isOpenSearch: false }" @click.away="isOpenSearch = false">
        <button class="px-5 border-0 focus:outline-none md:hidden" x-on:click="isOpenSearch = ! isOpenSearch;">
            <i class="fas fa-search text-light-space-blue"></i>
        </button>
        <div  class="absolute top-0 z-40 w-96 md:hidden right-0"
            x-show="isOpenSearch"
            x-transition.duration.500ms
            >
            <div class="grid h-screen grid-cols-10">
                {{-- main menu --}}
                <div class="w-full col-span-8 col-start-3 bg-white border-r border-gray-200 shadow-sm drop-shadow-sm row-span-full">
                    <div class="flex flex-col h-screen p-3 pt-0">
                        <div class="flex flex-col mb-auto" >
                            @livewire('participant.search.search-dropdown-mobile')
                        </div>
                    </div>
                </div>
                {{-- close menu button --}}
                <div class="z-50 flex justify-center w-full col-start-2 col-end-4 py-4 row-span-full">
                    <button x-on:click="isOpenSearch = false" class="w-10 h-10 bg-white border border-gray-300 rounded-full shadow-lg focus:outline-none">
                        <i class="w-5 fas fa-times text-light-space-blue"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>

</nav>


<script>
    function dataMenuOpen() {
        return {
            isOpenMenuContent: true,
            isOpenProfileContent: false,
        }
    }

</script>
