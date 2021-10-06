<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full px-4 py-3">
        <div class="max-w-full sm:px-1">
            <div class="max-w-full">
                <!-- Logo -->
                <div class="max-w-full grid grid-cols-5">
                  <div class="col-span-3 sm:grid grid-cols-4 md:grid-cols-5"> <!-- LOGO AND SEARCH -->
                        <div class="max-w-full md:col-span-1 flex justify-center items-center">
                            <div class="w-full lg:flex justify-center items-center">
                                <a href="{{ route('dashboard') }}">
                                        <img src="{{asset('images/cvsulogo.png')}}" alt="" class="h-16 w-16">
                                </a>
                            </div>  
                        </div>
                    
                        <div class="max-w-full hidden sm:block mt-3 sm:col-span-3 md:col-span-4 lg:col-span-3">
                            <div class="relative m-1 text-gray-600">
                                @livewire('participant.search-dropdown')
                                <div class="absolute right-0 top-0 pt-2 mr-3 ">
                                    <i class="fas fa-search text-gray-400 text-xl"></i>
                                </div>
                            </div>
                        </div>
                  </div><!-- LOGO AND SEARCH -->
                  <div class="max-w-full col-span-2 flex items-center lg:pr-8"> <!-- LOGIN SIGNUP  -->
                       <div class="w-full">
                            <div class="hidden sm:flex items-center justify-end">
                                <div>
                                    @if (Route::has('login'))
                                        <div class="w-full flex">
                                            <a href="{{ route('login') }}" class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-sm text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                                Log in
                                            </a>
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 m-1 text-sm leading-4 font-medium rounded-sm text-white bg-gray-700 hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                                    Sign Up
                                                </a>
                                            @endif
                                        </div>
                                        @endif
                                </div>
                                </div>
                                <div class="max-w-full flex justify-end items-center sm:hidden">
                                    <button class="mobile-menu-button">
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                            </svg>
                                    </button>
                                </div>
                       </div>
                   </div> <!-- LOGIN SIGNUP  -->
                    <!-- menu btn -->
                </div>
            </div>

            <div class="mobile-menu w-full pt-6 space-y-5 hidden sm:hidden">
                @if (Route::has('login'))
                    <div class="w-full flex flex-col">
                        <a href="{{ route('login') }}" class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-sm text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 m-1 text-sm leading-4 font-medium rounded-sm text-white bg-gray-700 hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                Sign Up
                            </a>
                        @endif
                    </div>
                @endif
                  <!-- Navigation Links -->
                <div class="max-w-full">
                    <div class="relative m-1 text-gray-600">
                        @livewire('participant.search-dropdown')
                        <div class="absolute right-0 top-0 pt-2 mr-3">
                            <i class="fas fa-search text-gray-400 text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</nav>
