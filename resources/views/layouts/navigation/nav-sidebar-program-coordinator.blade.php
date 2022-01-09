<div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
    <div class="flex h-full antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
        <!-- Loading screen -->
        <div
            x-ref="loading"
            class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-gray-200"
            >
            Loading...
        </div>

        <!-- Sidebar -->
        <div class="fixed inset-y-0 flex flex-shrink-0 transition-all">
            <div x-show="isSidebarOpen" @click="isSidebarOpen = false" class="fixed inset-0 z-10 bg-black bg-opacity-50 lg:hidden"> </div>

            <div x-show="isSidebarOpen" class="fixed inset-y-0 z-10 w-16 bg-white"></div>

            <!-- Mobile bottom bar -->
            <nav aria-label="Options" class="fixed inset-x-0 bottom-0 flex flex-row-reverse items-center justify-between px-4 py-2 bg-white border-t border-green-100 sm:hidden shadow-t rounded-t-3xl">
                <!-- Menu button -->
                <button
                    @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
                    class="p-2 text-gray-500 transition-colors rounded-lg shadow-md hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-300 focus:ring-offset-white focus:ring-offset-2"
                    :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-gray-500' : 'text-white-500 bg-white'"
                    >
                    <span class="sr-only">Toggle sidebar</span>
                    <i class="w-6 h-auto fas fa-stream"></i>
                </button>

                <!-- Logo -->
                <a href="#">
                    <img class="self-center h-7 w-7" src="{{ asset('storage/image/cvsu-ext-application-logo.png') }}" />
                </a>

                <!-- User avatar button -->
                <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
                    <button
                        @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
                        class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-green-600 focus:ring-offset-white focus:ring-offset-2"
                            >
                        <img class="w-8 h-8 rounded-lg shadow-md" src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4" alt="Ahmed Kamel" />
                        <span class="sr-only">User menu</span>
                    </button>
                    <div
                    x-show="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape="isOpen = false"
                    x-ref="userMenu"
                    tabindex="-1"
                    class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
                    role="menu"
                    aria-orientation="vertical"
                    aria-label="user menu"
                    >
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                        >Your Profile</a
                    >

                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>

                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                    </div>
                </div>
            </nav>

            <!-- Left mini bar -->
            <nav aria-label="Options" class="z-20 flex-col items-center flex-shrink-0 hidden w-16 py-4 bg-white border-gray-200 shadow-md border-r-1 sm:flex" > <!-- rounded-tr-3xl rounded-br-3xl -->
                <!-- Logo -->
                <div class="flex-shrink-0 py-4">
                    <a href="{{ url('/') }}">
                        <img class="self-center w-10 h-auto" src="{{ asset('storage/image/cvsu-ext-application-logo.png') }}" />
                    </a>
                </div>
                <div class="flex flex-col items-center flex-1 p-2 space-y-4">
                    <!-- Menu button -->
                    <button @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
                        class="p-2 text-gray-500 transition-colors rounded-lg shadow-md hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-300 focus:ring-offset-white focus:ring-offset-2"
                        :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-gray-500' : 'text-white-500 bg-white'"
                        >
                        <span class="sr-only">Toggle sidebar</span>
                        <i class="w-6 h-auto fas fa-stream"></i>
                    </button>
                    <!-- Messages button -->
                    <button @click="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'messagesTab'"
                        class="p-2 text-gray-500 transition-colors rounded-lg shadow-md hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-300 focus:ring-offset-white focus:ring-offset-2"
                        :class="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? 'text-white bg-gray-500' : 'text-white-500 bg-white'"
                        >
                        <span class="sr-only">Toggle message panel</span>
                        <i class="w-6 h-auto fas fa-inbox"></i>
                    </button>
                    <!-- Notifications button -->
                    <button @click="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'notificationsTab'"
                        class="p-2 text-gray-500 transition-colors rounded-lg shadow-md hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-300 focus:ring-offset-white focus:ring-offset-2"
                        :class="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? 'text-white bg-gray-500' : 'text-white-500 bg-white'"
                        >
                        <span class="sr-only">Toggle notifications panel</span>
                        <i class="w-6 h-auto fas fa-bell"></i>
                    </button>
                </div>

                <!-- User avatar -->
                <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
                    <button @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
                        class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-green-600 focus:ring-offset-white focus:ring-offset-2">
                        <img class="w-10 h-10 rounded-lg shadow-md" src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4" alt="Ahmed Kamel" />
                        <span class="sr-only">User menu</span>
                    </button>
                    <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false"
                        x-ref="userMenu" tabindex="-1"
                        class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-label="user menu" >
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="event.preventDefault();
                            this.closest('form').submit();">
                                Sign out
                            </a>
                        </form>
                    </div>
                </div>
            </nav>

            <div
                x-transition:enter="transform transition-transform duration-300"
                x-transition:enter-start="-translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition-transform duration-300"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full"
                x-show="isSidebarOpen"
                class="fixed inset-y-0 left-0 z-10 flex-shrink-0 w-64 bg-white shadow-lg sm:left-16 rounded-tr-2xl rounded-br-2xl sm:w-72 lg:static lg:w-64">
                <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">
                    <!-- Logo -->
                    <div class="flex items-center justify-center flex-shrink-0 py-10">
                        <a href="{{ url('/') }}">
                            <img class="self-center w-24 h-auto" src="{{ asset('storage/image/cvsu-ext-application-logo.png') }}" />
                        </a>
                    </div>

                    <!-- Links -->
                    <div class="flex-1 px-4 space-y-2 overflow-hidden text-sm font-semibold tracking-wider text-gray-500 hover:overflow-auto">
                        <a href="{{ route('program-coordinator.dashboard') }}"  class="flex items-center w-full p-2 space-x-2 border-l-2 border-transparent ">
                        <img class="w-auto h-5"  src="{{ asset('storage/image/icons/dashboard.png') }}" />
                            <span>Dashboard</span>
                        </a>
                        <a href="{{ route('program-coordinator.webinar') }}" class="flex items-center w-full p-2 space-x-2 border-l-2 border-transparent ">
                        <img class="w-auto h-5"  src="{{ asset('storage/image/icons/webinar.gif') }}" />
                            <span>Webinar</span>
                        </a>
                        <a href="{{ route('program-coordinator.advertisement') }}" class="flex items-center w-full p-2 space-x-2 border-l-2 border-transparent ">
                        <img class="w-auto h-5"  src="{{ asset('storage/image/icons/advertisement.gif') }}" />
                            <span>Advertisement</span>
                        </a>
                        <a href="{{ route('program-coordinator.report') }}" class="flex items-center w-full p-2 space-x-2 border-l-2 border-transparent ">
                        <img class="w-auto h-5"  src="{{ asset('storage/image/icons/reports.gif') }}" />
                            <span>Reports</span>
                        </a>
                    </div>
                </nav>

                <section x-show="currentSidebarTab == 'messagesTab'" class="px-4 py-6">
                    <h2 class="text-xl">Messages</h2>
                </section>

                <section x-show="currentSidebarTab == 'notificationsTab'" class="px-4 py-6">
                    <h2 class="text-xl">Notifications</h2>
                </section>
            </div>
        </div>

        <div class="flex flex-col flex-1">
            <header class="relative flex items-center justify-between flex-shrink-0 p-4">
                <form action="#" class="flex-1">
                    <!--  -->
                </form>
                <div class="items-center hidden ml-4 sm:flex">
                    <button
                    @click="isSettingsPanelOpen = true"
                    class="p-2 text-gray-500 transition-colors bg-white rounded-lg shadow-md hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-300 focus:ring-offset-white focus:ring-offset-2"
                    {{-- class="p-2 mr-4 text-gray-400 bg-white rounded-lg shadow-md hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-gray-100 focus:ring-offset-4" --}}
                    >
                    <span class="sr-only">Settings</span>
                    <i class="w-6 h-auto fas fa-cog"></i>
                    </button>
                </div>

                <!-- Mobile sub header button -->
                <div class="flex flex-row-reverse">
                    <button
                        @click="isSubHeaderOpen = !isSubHeaderOpen"
                        class="fixed p-2 mx-1 text-gray-500 transition-colors bg-white rounded-lg shadow-md sm:hidden right-2 hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-300 focus:ring-offset-white focus:ring-offset-2"
                        @click.away="isSubHeaderOpen = false"
                        x-transition:enter="transition-transform transition-opacity ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-x-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-end="opacity-0 transform -translate-x-2"
                        >
                        <span class="sr-only">Toggle message panel</span>
                        <i class="w-6 h-auto fas fa-angle-left"></i>
                    </button>
                    <div class="fixed mr-12">
                        {{-- SMALL TOGGLE NOTIFICATION --}}
                        <button
                            @click="isSidebarOpen = true; currentSidebarTab = 'notificationsTab'; isSubHeaderOpen = false"
                            class="p-2 mx-1 text-gray-500 transition-colors bg-white rounded-lg shadow-md sm:hidden hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-300 focus:ring-offset-white focus:ring-offset-2"
                            x-show="isSubHeaderOpen"
                            @click.away="isSubHeaderOpen = false"
                            x-transition:enter="transition-transform transition-opacity ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-x-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-end="opacity-0 transform translate-x-2"
                            >
                            <span class="sr-only">Toggle notification panel</span>
                            <i class="w-6 h-auto fas fa-bell"></i>
                        </button>
                        {{-- SMALL TOGGLE MESSAGES --}}
                        <button
                            @click="isSidebarOpen = true; currentSidebarTab = 'messagesTab'; isSubHeaderOpen = false"
                            class="p-2 mx-1 text-gray-500 transition-colors bg-white rounded-lg shadow-md sm:hidden hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-300 focus:ring-offset-white focus:ring-offset-2"
                            x-show="isSubHeaderOpen"
                            @click.away="isSubHeaderOpen = false"
                            x-transition:enter="transition-transform transition-opacity ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-x-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-end="opacity-0 transform translate-x-2"
                            >
                            <span class="sr-only">Toggle message panel</span>
                            <i class="w-6 h-auto fas fa-inbox"></i>
                        </button>
                        {{-- SMALL TOGGLE SETTINGS --}}
                        <button
                            @click="isSettingsPanelOpen = true; isSubHeaderOpen = false"
                            class="p-2 mx-1 text-gray-500 transition-colors bg-white rounded-lg shadow-md sm:hidden hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-300 focus:ring-offset-white focus:ring-offset-2"
                            x-show="isSubHeaderOpen"
                            @click.away="isSubHeaderOpen = false"
                            x-transition:enter="transition-transform transition-opacity ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-x-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-end="opacity-0 transform translate-x-2"
                            >
                            <span class="sr-only">Toggle settings panel</span>
                            <i class="w-6 h-auto fas fa-cog"></i>
                        </button>
                    </div>
                </div>

            </header>

            <!-- Main -->
            <main class="h-full">
                <!-- Content -->
                {{ $slot }}
            </main>
        </div>
    </div>

    <!-- Panels -->

    <!-- Settings Panel -->
    <!-- Backdrop -->
    <div
      x-show="isSettingsPanelOpen"
      class="fixed inset-0 bg-black bg-opacity-20"
      @click="isSettingsPanelOpen = false"
      aria-hidden="true"
    ></div>
    <!-- Panel -->
    <section
      x-transition:enter="transform transition-transform duration-300"
      x-transition:enter-start="translate-x-full"
      x-transition:enter-end="translate-x-0"
      x-transition:leave="transform transition-transform duration-300"
      x-transition:leave-start="translate-x-0"
      x-transition:leave-end="translate-x-full"
      x-show="isSettingsPanelOpen"
      class="fixed inset-y-0 right-0 w-64 bg-white border-l border-green-100 rounded-l-3xl"
    >
      <div class="px-4 py-8">
        <h2 class="text-lg font-semibold">Settings</h2>
      </div>
    </section>



  </div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
  <script>
      const setup = () => {
          return {
          isSidebarOpen: false,
          currentSidebarTab: null,
          isSettingsPanelOpen: false,
          isSubHeaderOpen: false,
          watchScreen() {
              if (window.innerWidth <= 1024) {
              this.isSidebarOpen = false
              }
          },
      }
    }
  </script>
