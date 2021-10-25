<div class="max-w-full relative">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <input class="w-full border-1 border-gray-200  bg-white h-10 px-5 pr-16 rounded-full text-sm hover:border-gray-300 focus:outline-none focus:border-gray-300 focus:ring-gray-300 focus:ring-opacity-50 focus:ring-1"
        type="text" name="search" placeholder="Search ..." wire:model.debounce.500ms="search" autocomplete="off"
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
        >
    <div class="absolute w-full mt-2">
        <div class="w-full border border-gray-300  py-3 px-3 bg-white">
            <div class="w-full grid grid-cols-5">
                <div class="flex justify-center items-center">
                    <img src="https://cdn.pixabay.com/photo/2021/07/24/01/42/zebra-dove-6488440_960_720.jpg"
                        alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                        class="w-18 h-14 object-center object-cover">
                </div>
                <div class="col-span-3 flex items-center justify-center pl-3">
                    <h3 class="text-sm"> Lorem Ipsum is simply dummy text of the ....</h3>
                </div>
            </div>
        </div>
        <div class="w-full border border-gray-300  py-3 px-3 bg-white">
            <div class="w-full grid grid-cols-5">
                <div class="flex justify-center items-center">
                    <img src="https://cdn.pixabay.com/photo/2021/07/24/01/42/zebra-dove-6488440_960_720.jpg"
                        alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                        class="w-18 h-14 object-center object-cover">
                </div>
                <div class="col-span-3 flex items-center justify-center pl-3">
                    <h3 class="text-sm"> Lorem Ipsum is simply dummy text of the ....</h3>
                </div>
            </div>
        </div>
        <div class="w-full border border-gray-300  py-3 px-3 bg-white">
            <div class="w-full grid grid-cols-5">
                <div class="flex justify-center items-center">
                    <img src="https://cdn.pixabay.com/photo/2021/07/24/01/42/zebra-dove-6488440_960_720.jpg"
                        alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                        class="w-18 h-14 object-center object-cover">
                </div>
                <div class="col-span-3 flex items-center justify-center pl-3">
                    <h3 class="text-sm"> Lorem Ipsum is simply dummy text of the ....</h3>
                </div>
            </div>
        </div>
    </div>
</div>
