<div class="relative max-w-full">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <input class="h-10 px-5 pr-16 text-sm bg-white border-gray-400 rounded-full lg:w-96 border-1 hover:border-gray-500 focus:outline-none focus:border-gray-500 focus:ring-gray-400 focus:ring-opacity-50 focus:ring-2"
        type="text" name="search" placeholder="Search ..." wire:model.debounce.400ms="search"
        x-ref="searchField"
        @keydown.window="
            if (event.keyCode === 191) {
                event.preventDefault();
                $refs.search.focus();
            }
        "
        @focus="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown.shift.tab="isOpen = false"
        wire:keydown.escape="resetSearch"
        wire:keydown.tab="resetSearch"
        autocomplete="off"
        x-on: keydown.window.prevent.slash="$refs.searchField.focus()"
        x-on: keyup.escape="isTyped = false; $refs.searchField.blur()"
        >


    {{-- <div wire:loading class="top-0 right-0 mt-3 mr-4 spinner" ></div> --}}
    @if (strlen($search) >= 2)
        <div class="fixed top-0 bottom-0 left-0 right-0"></div>
        <div class="absolute z-50 w-full mt-4 text-sm bg-white rounded" x-show.transition.opacity="isOpen" >
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-white-700">
                            <a
                                href="" class="flex items-center px-5 py-3 transition duration-150 ease-in-out bg-white hover:bg-green-100"

                                @if ($loop->last) @keydown.tab="isOpen = false" @endif
                            >
                            @if ($result['image'])
                                <img src="{{ asset('storage/image/webinars/'.$result['image']) }}" alt="poster" class="w-20">
                            @else
                                <img src="https://via.placeholder.com/50x75" alt="poster" class="w-20">
                            @endif
                            <span class="ml-4">{{ $result['title'] }}</span>
                        </a>
                        </li>
                    @endforeach

                </ul>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
    @endif

</div>
