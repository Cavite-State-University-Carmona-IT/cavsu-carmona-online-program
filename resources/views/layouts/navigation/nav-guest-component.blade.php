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
                        <input class="border-1 border-gray-200 bg-white h-10 px-5 pr-16 rounded-sm text-sm hover:border-gray-300 focus:outline-none focus:border-gray-300 focus:ring-gray-300 focus:ring-opacity-50 focus:ring-1"
                          type="text" name="search" placeholder="Search" wire:model="navSearchBar">
                        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                          <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                            width="512px" height="512px">
                            <path
                              d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                          </svg>
                        </button>
                    </div>
                </div>

            </div>

            <div class="sm:flex sm:items-center sm:ml-6">
                @if (Route::has('login'))
                    <div class="ml-3 relative lg:mt-0 sm:mt-0 mt-2">
                        <a href="{{ route('login') }}" class="inline-flex items-center px-3 py-2 border text-sm leading-4 font-medium rounded-sm text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                            Log in
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
