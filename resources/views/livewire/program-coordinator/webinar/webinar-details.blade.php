<div>
    {{-- Do your work, then step back. --}}
    <style>
        input[type=file]::-webkit-file-upload-button,
        input[type=file]::file-selector-button {
            @apply text-white bg-gray-700 hover:bg-gray-600 font-medium text-sm cursor-pointer border-0 py-2.5 pl-8 pr-4;
            margin-inline-start: -1rem;
            margin-inline-end: 1rem;
        }
    </style>
    <div class="container mx-auto px-4 sm:px-8 pt-16 mt-2">
        <div class="grid w-full grid-cols-4 pt-2">

            {{-- left panel --}}
            <div class="lg:col-span-2 col-start-1 col-span-4">
                <!-- Tab Contents -->
                <div id="tab-contents">

                    {{-- video tab --}}
                    <div id="video" class="p-4">
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/{{ $webinar->video_link }}?rel=0" frameborder="0" modestbranding="1" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        {{-- video link --}}
                        <div class="pt-2">
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                    https://www.youtube.com/embed/
                                </span>
                                <input wire:model="video_link" type="text" name="video_link" id="video_link" class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" placeholder="www.example.com">
                            </div>
                        </div>
                    </div>

                    {{-- image tab --}}
                    <div id="image" class="hidden p-4" x-data="imageViewer()">
                        <img :src="imageUrl"  class="w-full object-cover h-auto" src="{{ asset('storage/image/webinars/'.$webinar->image) }}" alt="{{ $webinar->title }}">
                        {{-- image input --}}
                        <div class="pt-2">
                            <div class="mt-1">
                                <input type="file" name="image_file" id="image_file" @change="fileChosen"
                                class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                            </div>
                        </div>
                    </div>
                </div>

                {{-- image and video tabs --}}
                <ul id="tabs" class="inline-flex w-full px-4 pb-4">
                    <li class="px-4 py-1 -mb-px font-semibold text-gray-700 border-b-2 border-blue-400 rounded-t text-xs">
                        <a id="default-tab" href="#video">Video</a>
                    </li>
                    <li class="px-4 py-1 font-semibold text-gray-700 rounded-t text-xs border-b-4">
                        <a href="#image">Image</a>
                    </li>
                </ul>

            </div>

            {{-- right panel --}}
            <div class="lg:col-span-2 mt-4 p-2 col-span-4 bg-white shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 space-y-3 sm:p-6">

                    {{-- title --}}
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">
                            Title
                        </label>
                        <div class="mt-1">
                            <input wire:model="title" type="text" name="title" id="title"
                            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="www.example.com">
                        </div>
                    </div>

                    {{-- speaker --}}
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">
                            Speaker
                        </label>
                        <div class="mt-1">
                            <input wire:model="speaker" type="text" name="speaker" id="speaker"
                            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="www.example.com">
                        </div>
                    </div>

                    {{-- about --}}
                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            About
                        </label>
                        <div class="mt-1">
                            <textarea wire:model="about" id="about" name="about" rows="5" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
                        </div>
                    </div>

                    {{-- Date and Status --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">
                                Date
                            </label>
                            <div class="mt-1">
                                <input wire:model="date" type="date" name="date" id="date"
                                class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">
                                Status
                            </label>
                            <div class="mt-1">
                                <select wire:model="status" type="text" name="status" id="status"
                                class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="1">Pending</option>
                                    <option value="2">Published</option>
                                    <option value="3">Delete</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- evaluation link --}}
                    <div>
                        <label for="company_website" class="block text-sm font-medium text-gray-700">
                            Evaluation Link
                        </label>
                        <div class="flex mt-1 rounded-md shadow-sm">
                            <span class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                https://
                            </span>
                            <input wire:model="evaluation_link" type="text" name="company_website" id="company_website" class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" placeholder="www.example.com">
                        </div>
                    </div>

                    {{-- certificate link --}}
                    <div>
                        <label for="company_website" class="block text-sm font-medium text-gray-700">
                            Certificate Link  <span class="text-xs text-gray-400">(Leave blank to use system certificate generator)</span>
                        </label>
                        <div class="flex mt-1 rounded-md shadow-sm">
                            <span class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                https://
                            </span>
                            <input wire:model="ecertificate_link" type="text" name="company_website" id="company_website" class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" placeholder="www.example.com">
                        </div>
                    </div>
                </div>



                <div class="flex mt-5">
                    <div class="m-3">
                        <button wire:click="update()" class="inline-flex items-center w-32 px-6 py-2 font-bold tracking-wide text-gray-800 bg-white border-b-2 border-blue-500 rounded shadow-md hover:border-blue-600 hover:bg-blue-500 hover:text-white">
                            <span class="mx-auto">save</span>
                        </button>
                    </div>
                    <div class="m-3">
                        <button wire:click="delete()" class="inline-flex items-center w-32 px-6 py-2 font-bold tracking-wide text-gray-800 bg-white border-b-2 border-red-500 rounded shadow-md hover:border-red-600 hover:bg-red-500 hover:text-white">
                            <span class="mx-auto">delete</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid w-full grid-cols-8">
            {{-- reviews --}}
            <div class="h-full p-3 mt-5 bg-white shadow-md rounded-xl">
                <div class="p-3 bg-gray-100 rounded-md">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="relative inline-block">
                                <div class="relative w-16 h-16 overflow-hidden rounded-full">
                                    <img class="absolute top-0 left-0 object-cover w-full h-full bg-cover object-fit" src="https://picsum.photos/id/646/200/200" alt="Profile picture">
                                    <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ml-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-baseline">
                                    <span class="font-bold text-gray-600">Mary T.</span>
                                    <div class="flex items-center p-3 ml-3">
                                        <svg class="w-4 h-4 text-yellow-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                        <svg class="w-4 h-4 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    </div>
                                </div>
                                <div class="flex items-center text-sm text-gray-600 fill-current">
                                    <button class="flex items-center">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5.08 12.16A2.99 2.99 0 0 1 0 10a3 3 0 0 1 5.08-2.16l8.94-4.47a3 3 0 1 1 .9 1.79L5.98 9.63a3.03 3.03 0 0 1 0 .74l8.94 4.47A2.99 2.99 0 0 1 20 17a3 3 0 1 1-5.98-.37l-8.94-4.47z"/></svg>
                                        <span class="ml-2">Share</span>
                                    </button>
                                    <button class="flex items-center ml-6">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11 0h1v3l3 7v8a2 2 0 0 1-2 2H5c-1.1 0-2.31-.84-2.7-1.88L0 12v-2a2 2 0 0 1 2-2h7V2a2 2 0 0 1 2-2zm6 10h3v10h-3V10z"/></svg>
                                        <span class="ml-2">56</span>
                                    </button>
                                    <button class="flex items-center ml-4">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11 20a2 2 0 0 1-2-2v-6H2a2 2 0 0 1-2-2V8l2.3-6.12A3.11 3.11 0 0 1 5 0h8a2 2 0 0 1 2 2v8l-3 7v3h-1zm6-10V0h3v10h-3z"/></svg>
                                        <span class="ml-2">10</span>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <span class="font-bold">Sapien consequat eleifend!</span>
                                <p class="mt-1 text-sm line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function imageViewer(){
        return{
            imageUrl: '{{ asset('storage/image/webinars/'.$webinar->image) }}',
            fileChosen(event) {
            this.fileToDataUrl(event, src => this.imageUrl = src)
            },

            fileToDataUrl(event, callback) {
            if (! event.target.files.length) return

            let file = event.target.files[0],
                reader = new FileReader()

            reader.readAsDataURL(file)
            reader.onload = e => callback(e.target.result)
            },
        }
    }

    let tabsContainer = document.querySelector("#tabs");

    let tabTogglers = tabsContainer.querySelectorAll("a");
    console.log(tabTogglers);

    tabTogglers.forEach(function(toggler) {
    toggler.addEventListener("click", function(e) {
    e.preventDefault();

    let tabName = this.getAttribute("href");

    let tabContents = document.querySelector("#tab-contents");

    for (let i = 0; i < tabContents.children.length; i++) {

    tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-b",  "-mb-px", "opacity-100");  tabContents.children[i].classList.remove("hidden");
    if ("#" + tabContents.children[i].id === tabName) {
    continue;
    }
    tabContents.children[i].classList.add("hidden");

    }
    e.target.parentElement.classList.add("border-blue-400", "border-b-4", "-mb-px", "opacity-100");
    });
    });

    document.getElementById("default-tab").click();
  </script>
