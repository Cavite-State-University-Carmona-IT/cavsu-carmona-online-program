<div class="max-w-full relative">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <input class="w-full border-1 border-gray-300  bg-white h-10 px-5 pr-16 rounded-full text-sm hover:border-gray-300 focus:outline-none focus:border-gray-300 focus:ring-gray-300 focus:ring-opacity-50 focus:ring-1"
        type="text" name="search" placeholder="Search ..." wire:model.debounce.400ms="search" 
        @keydown.window="
            if (event.keyCode === 191) {
                event.preventDefault();
                $refs.search.focus();
            }
        "
        @focus="isOpen = true"
        @keydown="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown.shift.tab="isOpen = false"

        autocomplete="off"
        >
    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div> 
    @if (strlen($search) >= 2)
        <div
            class="z-50 absolute bg-white text-sm rounded w-full mt-4"
            x-show.transition.opacity="isOpen"
        >
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-white-700">
                            <a
                                href="" class="block hover:bg-white px-5 py-5 flex items-center transition ease-in-out duration-150"
                                @if ($loop->last) @keydown.tab="isOpen = false" @endif
                            >
                            @if ($result['image'])
                                <img src="{{ asset('storage/image/webinars/'.$result['image']) }}" alt="poster" class="w-8">
                            @else
                                <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
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
