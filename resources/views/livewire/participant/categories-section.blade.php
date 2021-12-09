<div  class="relative max-w-full" x-data="{ open: false }" @mouseleave="open = false">
    <button @mouseover="open = true" class="h-10 text-sm font-semibold text-gray-500 border-0 hover:underline">Category</button>
    <div class="absolute z-50 w-full mt-0 "
        x-show.transition.opacity="open"
        @mouseover="open = true"
        style="display: none;"
    >
        <div class="flex">
            {{-- extension service --}}
            <ul class="bg-white whitespace-nowrap flex-none" >
                <li class="flex justify-between w-full px-3 py-2 hover:bg-green-100"
                    wire:click="changeSubCategories(1)"
                    >
                    <p class="text-sm text-gray-700">Barangay Entreprenyur</p>
                    <i class="pl-2 text-gray-400 fas fa-chevron-right"></i>
                </li>
                <li class="flex justify-between px-3 py-2 hover:bg-green-100"
                    wire:click="changeSubCategories(2)"
                    >
                    <p class="text-sm text-gray-700">Basura Ko Ayos Ko</p>
                    <i class="pl-2 text-gray-400 fas fa-chevron-right"></i>
                </li>
                <li class="flex justify-between w-full px-3 py-2 hover:bg-green-100"
                    wire:click="changeSubCategories(3)"
                    >
                    <p class="text-sm text-gray-700">Kakayahang Teknikal Tungo Sa Magandang Kinabukasan</p>
                    <i class="pl-2 text-gray-400 fas fa-chevron-right"></i>
                </li>
                <li class="flex justify-between w-full px-3 py-2 hover:bg-green-100"
                    wire:click="changeSubCategories(4)"
                    >
                    <p class="text-sm text-gray-700">Project Kompyuter</p>
                    <i class="pl-2 text-gray-400 fas fa-chevron-right"></i>
                </li>
                <li class="flex justify-between w-full px-3 py-2 hover:bg-green-100"
                    wire:click="changeSubCategories(5)"
                    >
                    <p class="text-sm text-gray-700">Project Pisara</p>
                    <i class="pl-2 text-gray-400 fas fa-chevron-right"></i>
                </li>
            </ul>
            {{-- topics --}}
            <ul class="bg-white whitespace-nowrap flex-none">
                @foreach($fieldOfInterests as $fieldOfInterest)
                    <li class="w-full px-3 py-2 whitespace-nowrap hover:bg-green-100">
                        <p class="text-sm text-gray-700">{{ $fieldOfInterest->name }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
