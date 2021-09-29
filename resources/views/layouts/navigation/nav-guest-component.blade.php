<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-layouts.application-logo />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <div class="px-1 py-2 m-1 relative mx-auto text-gray-600">
                        @livewire('participant.search-dropdown')
                    </div>
                </div>

            </div>

            <div class="sm:flex sm:items-center sm:ml-6">
                @if (Route::has('login'))
                    <div class="ml-3 relative lg:mt-0 sm:mt-0 mt-2">
                        <a href="{{ route('login') }}" class="inline-flex items-center px-3 py-2 border text-sm leading-4 font-medium rounded-sm text-green-800 bg-green-200 hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                            Log in test
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 m-1 border text-sm leading-4 font-medium rounded-sm text-white bg-gray-700 hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                Sign Up
                            </a>
                        @endif
                    </div>
                @endif
            </div>


        </div>
    </div>

</nav>
