<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="grid w-full grid-cols-8">
        <div class="col-span-6 col-start-2">
            <div class="grid w-full grid-cols-3">
                <div class="col-span-1 bg-white shadow-md rounded-xl">

                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company_website" class="block text-sm font-medium text-gray-700">
                                title
                                </label>
                                <div class="flex mt-1 rounded-md shadow-sm">
                                    <input wire:model="title" type="text" name="company_website" id="company_website" class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" placeholder="www.example.com">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                image
                            </label>
                            <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Upload a file</span>
                                            <input wire:model="image" id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, GIF up to 10MB
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                About
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="about" id="about" name="about" rows="3" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Brief description for your profile. URLs are hyperlinked.
                            </p>
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label for="company_website" class="block text-sm font-medium text-gray-700">
                            speaker
                            </label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <input wire:model="speaker" type="text" name="company_website" id="company_website" class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" placeholder="www.example.com">
                            </div>
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <div class="">
                                <label for="status" class="block text-sm font-medium text-gray-700">
                                status
                                </label>
                                <div class="flex mt-1 rounded-md shadow-sm">
                                    <select wire:model="speaker" type="text" id="status" class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                        <option value="1">Pending</option>
                                        <option value="2">Published</option>
                                        <option value="3">Deleted</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input wire:model="date" datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Select date">
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label for="company-website" class="block text-sm font-medium text-gray-700">
                            video link
                            </label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                    https://www.youtube.com/embed/
                                </span>
                                <input wire:model="video_link" type="text" name="company-website" id="company-website" class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" placeholder="www.example.com">
                            </div>
                        </div>


                        <div class="col-span-3 sm:col-span-2">
                            <label for="company_website" class="block text-sm font-medium text-gray-700">
                                evaluation link
                            </label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                    http://
                                </span>
                                <input wire:model="evaluation_link" type="text" name="company_website" id="company_website" class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" placeholder="www.example.com">
                            </div>
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label for="company_website" class="block text-sm font-medium text-gray-700">
                            certificate_link
                            </label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                    http://
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
            <div class="col-span-2 bg-white shadow-md rounded-xl">
                <div class="videoWrapper">
                    <iframe class="rounded-xl" width="560" height="349" src="https://www.youtube.com/embed/{{ $video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
