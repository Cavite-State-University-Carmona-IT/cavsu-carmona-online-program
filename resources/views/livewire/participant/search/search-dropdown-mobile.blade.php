<div>
    {{-- Be like water. --}}
    <div class="p-3">
        <input
            class="h-10 px-5 pr-16 text-sm bg-white border-gray-400 rounded-full lg:w-96 border-1 hover:border-light-space-blue focus:outline-none focus:border-gray-500 focus:ring-gray-400 focus:ring-opacity-50 focus:ring-2"
            type="text" name="search" placeholder="Search ..." wire:model.debounce.400ms="search"
        >
    </div>
</div>
