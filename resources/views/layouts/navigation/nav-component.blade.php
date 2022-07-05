<nav class="fixed top-0 z-40 w-full py-3 mx-auto bg-white border-b-2 border-gray-200 px-2 md:px-6 flex justify-between items-center">
    
    <div>
        <div class="" x-data="{ openMobileSearch: false }">
            <button class="w-8 h-8 md:hidden" x-on:click="openMobileSearch = !openMobileSearch">
                <i class="text-base text-gray-700 fas fa-search"></i>
            </button>
            <div class="relative">
                <div  class="absolute top-0 z-40 w-96 md:hidden left-0"
                    x-show="openMobileSearch"
                    x-transition.duration.500ms
                    >
                    <div class="grid h-screen grid-cols-10">
                        {{-- main menu --}}
                        <div class="w-full col-span-8 col-start-1 bg-white border-r border-gray-200 shadow-sm drop-shadow-sm row-span-full">
                            <div class="flex flex-col h-screen p-3 pt-0">
                                <div class="flex flex-col mb-auto" >
                                    @livewire('participant.search.search-dropdown-mobile')
                                </div>
                            </div>
                        </div>
                        {{-- close menu button --}}
                        <div class="z-50 flex justify-center w-full col-start-8 col-end-10 py-4 row-span-full">
                            <button x-on:click="isOpenSearch = false" class="w-10 h-10 bg-white border border-gray-300 rounded-full shadow-lg focus:outline-none">
                                <i class="w-5 fas fa-times text-light-space-blue"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="hidden md:block">
            <div class="w-full flex flex-nowrap ">
                <a href="{{ url('/') }}" class="">
                    <img src="{{asset('images/cvsulogo.png')}}" alt="" class="w-12 h-12">
                </a>
                <div class="relative m-1 text-gray-600">
                    @livewire('participant.search-dropdown')
                    <div class="absolute top-0 right-0 pt-2 mr-3 ">
                        <i class="fa-sm text-gray-400 fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- logo --}}
    <a href="{{ url('/') }}" class="md:hidden">
        <img src="{{asset('images/cvsulogo.png')}}" alt="" class="w-12 h-12 ">
    </a>

    {{-- profile and menu --}}
    @if(auth()->user())
        <div x-data="{ openMenu: false }" @click.away="openMenu = false">
            <button x-on:click="openMenu = !openMenu" class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                <img class="object-cover w-8 h-8 rounded-full" src="{{ asset('storage/image/users/'.Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->profile_photo_path }}" />
            </button>
            <div  class="absolute top-0 z-40 w-96 right-0" x-show="openMenu" x-transition.duration.500ms >
                <div class="grid h-screen grid-cols-10">
                    {{-- main menu --}}
                    <div class="w-full col-span-8 col-start-3 bg-white overflow-y-auto border-r border-gray-200 shadow-sm drop-shadow-sm row-span-full">
                        <div class="flex flex-col h-screen p-3 pt-0">
                            <div class="flex flex-col mb-auto" x-data="dataMenuOpen()">

                                <div class="flex flex-col h-screen p-3">
                                    <div class="flex flex-col mb-auto">
                                        <div class="flex justify-between w-full pt-4 ">
                                            <div class="grid grid-cols-3 gap-2">
                                                {{-- profile picture --}}
                                                <div class="col-span-1 flex items-center justify-center">
                                                    <img class="object-cover w-16 h-16 m-2 border border-gray-400 rounded-full shadow-lg" src="{{ asset('storage/image/users/'.auth()->user()->profile_photo_path) }}"/>
                                                </div>
                                                {{-- user info --}}
                                                <div class="col-span-2 flex items-center">
                                                    <div class="">
                                                        <p class="font-semibold tracking-wide text-gray-800">{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</p>
                                                        <p class="text-sm tracking-wider text-gray-400">{{ '@' . auth()->user()->username }}</p>
                                                        <p class="text-xs tracking-wider text-gray-400 line-clamp-1">{{ auth()->user()->email }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- divider --}}
                                        <hr>
                                    

                                        {{-- profile :content --}}
                                        <div x-show="isOpenProfileContent">
                                            <div class="py-2">
                                                
                                                <a class=" block px-4 py-2 mt-2 text-base tracking-wide bg-transparent rounded-lg md:mt-0 hover:text-green-400 focus:text-green-400 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:shadow-outline" 
                                                    @click="openExtensionServices = true; isOpenProfileContent = false">
                                                    <div class="flex justify-between">
                                                        <span>Extension Services</span>
                                                        <i class="fas text-gray-500 pt-1 fa-angle-right"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="mb-2">
                                            <p class="p-2 text-sm tracking-wide text-gray-400 uppercase bg-transparent">
                                                {{ auth()->user()->roles->first()->display_name }}
                                            </p>

                                            <div>
                                                <a class=" block px-4 py-2 mt-2 text-base tracking-wide bg-transparent rounded-lg md:mt-0 hover:text-green-400 focus:text-green-400 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:shadow-outline" 
                                                    href="{{ route('program-coordinator.dashboard') }}">
                                                    Dashboard
                                                </a>
                                                <a class=" block px-4 py-2 mt-2 text-base tracking-wide bg-transparent rounded-lg md:mt-0 hover:text-green-400 focus:text-green-400 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:shadow-outline" 
                                                    href="{{ route('program-coordinator.webinar') }}">
                                                    Webinars
                                                </a>
                                                <a class=" block px-4 py-2 mt-2 text-base tracking-wide bg-transparent rounded-lg md:mt-0 hover:text-green-400 focus:text-green-400 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:shadow-outline" 
                                                    href="{{ route('program-coordinator.report') }}">
                                                    Reports
                                                </a>
                                                <div x-data="{ settingsDropdown: false }">
                                                    <a class=" block px-4 py-2 mt-2 text-base tracking-wide bg-transparent rounded-lg md:mt-0 hover:text-green-400 focus:text-green-400 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:shadow-outline" 
                                                        x-on:click="settingsDropdown = !settingsDropdown" >
                                                        Settings
                                                    </a>
                                                    <div x-show="settingsDropdown" class="rounded-lg bg-gray-50 my-2">
                                                        <a class=" bg-transparent block px-4 py-3 tracking-wide mt-2 text-base md:mt-0 hover:text-green-500 focus:outline-none focus:shadow-outline" 
                                                            href="{{ route('program-coordinator.roles-and-permissions') }}">
                                                            Roles & Permissions
                                                        </a>
                                                        <a class=" bg-transparent block px-4 py-3 tracking-wide mt-2 text-base md:mt-0 hover:text-green-500 focus:outline-none focus:shadow-outline" 
                                                            href="{{ route('program-coordinator.ecertificate-templates') }}">
                                                            E-Certificate Templates
                                                        </a>
                                                        <a class=" bg-transparent block px-4 py-3 tracking-wide mt-2 text-base md:mt-0 hover:text-green-500 focus:outline-none focus:shadow-outline" 
                                                            href="{{ route('program-coordinator.company-information') }}">
                                                            Company Information
                                                        </a>
                                                    </div>
                                                </div>

                                                <hr class="m-2">
                                                <a class=" block px-4 py-2 mt-2 text-base tracking-wide bg-transparent rounded-lg md:mt-0 hover:text-green-400 focus:text-green-400 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:shadow-outline" 
                                                    href="#">
                                                    My Profile
                                                </a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a class=" block px-4 py-2 mt-2 text-base tracking-wide bg-transparent rounded-lg md:mt-0 hover:text-green-400 focus:text-green-400 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:shadow-outline" 
                                                        href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                                        Log Out
                                                    </a>
                                                </form>
                                            </div>
                                            
                                        </div>

                                        {{-- extension service :content --}}
                                        <div x-show="openExtensionServices">
                                            <div class="py-2">
                                                
                                                <a class=" block px-4 py-2 mt-2 text-base tracking-wide bg-transparent rounded-lg md:mt-0 hover:text-green-400 focus:text-green-400 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:shadow-outline" 
                                                    @click="openExtensionServices = false; isOpenProfileContent = true">
                                                    <div class="flex justify-between">
                                                        <span>Back to Menu</span>
                                                        <i class="fas text-gray-500 pt-1 fa-angle-right"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="mb-2">


                                            <p class="py-2 text-sm tracking-wide text-gray-400 uppercase bg-transparent">Extension Services</p>
                                            @livewire('partial.extension-service-dropdown-section')
                                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- close menu button --}}
                    <div class="z-50 flex justify-center w-full col-start-2 col-end-4 py-4 row-span-full">
                        <button x-on:click="openMenu = false" class="w-10 h-10 bg-white border border-gray-300 rounded-full shadow-lg focus:outline-none">
                            <i class="w-5 fas fa-times text-light-space-blue"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @else 
        <div x-data="{ openExtensionServiceMenu: false }" @click.away="openExtensionServiceMenu = false">
            <button class="px-5 border-0 focus:outline-none" x-on:click="openExtensionServiceMenu = ! openExtensionServiceMenu;">
                <i class="fas fa-bars text-light-space-blue"></i>
            </button>
            <div  class="absolute top-0 z-40 w-96 right-0" x-show="openExtensionServiceMenu" x-transition.duration.500ms >
                <div class="grid h-screen grid-cols-10">
                    {{-- main menu --}}
                    <div class="w-full col-span-8 col-start-3 bg-white overflow-y-auto border-r border-gray-200 shadow-sm drop-shadow-sm row-span-full">
                        <div class="flex flex-col h-full px-4">
                            {{-- login and signup button --}}
                            <div class="flex-none pt-14">
                                <div class="grid grid-cols-2 gap-4">
                                    {{-- <a class="flex justify-center w-full p-3 text-xs font-bold tracking-wide uppercase transition bg-transparent bg-white border text-light-space-blue border-light-space-blue hover:text-gray-100 hover:border-light-space-blue hover:bg-light-space-blue focus:outline-none focus:bg-gray-100 active:bg-gray-100">
                                        Login
                                    </a>
                                    <a  class="flex justify-center w-full p-3 text-xs font-bold tracking-wide uppercase transition bg-transparent bg-white border text-light-space-blue border-light-space-blue hover:text-gray-100 hover:border-light-space-blue hover:bg-light-space-blue focus:outline-none focus:bg-gray-100 active:bg-gray-100">
                                        Signup
                                    </a> --}}
                                    
                                    <a href="{{ route('register') }}" class="flex justify-center p-3 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear bg-green-500 rounded-sm shadow outline-none whitespace-nowrap get-started focus:outline-none active:bg-green-600 hover:bg-gray-200 hover:text-gray-500" href="http://localhost:8000/register">
                                        Register
                                    </a>
                                    <a href="{{ route('login') }}" class="flex justify-center p-3 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear bg-light-space-blue rounded-sm shadow outline-none whitespace-nowrap get-started focus:outline-none active:bg-green-600 hover:bg-gray-200 hover:text-gray-500" href="http://localhost:8000/register">
                                        Login
                                    </a>
                                </div>
                            </div>
                            {{-- extension services --}}
                            <div class="flex-auto py-4">
                                <p class="py-2 text-sm tracking-wide text-gray-400 uppercase bg-transparent">Extension Services</p>
                                @livewire('partial.extension-service-dropdown-section')
                            </div>
                        </div>
                    </div>
                    {{-- close menu button --}}
                    <div class="z-50 flex justify-center w-full col-start-2 col-end-4 py-4 row-span-full">
                        <button x-on:click="openExtensionServiceMenu = false" class="w-10 h-10 bg-white border border-gray-300 rounded-full shadow-lg focus:outline-none">
                            <i class="w-5 fas fa-times text-light-space-blue"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</nav>


<script>
    function dataMenuOpen() {
        return {
            openExtensionServices: false,
            isOpenProfileContent: true,
        }
    }

</script>
