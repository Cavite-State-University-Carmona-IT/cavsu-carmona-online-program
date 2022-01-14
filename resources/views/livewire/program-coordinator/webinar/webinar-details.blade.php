<div>
    {{-- Gawin mo na lahat --}}
    <div class="max-w-full pt-16 mt-2 bg-white">
        <div class="grid grid-cols-12">
            {{-- left panel --}}
            <div class="md:col-span-4 col-start-1 p-8 border-r-gray-200 md:border-r col-span-full">
                {{-- extension service --}}
                <div class="flex w-full p-4 bg-gray-100 rounded-lg">
                    <div class="flex-none">
                        <img class="object-cover w-12 h-12 rounded-full" src="{{ asset('storage/image/extension-services/'.$webinar->extensionService()->image) }}">
                    </div>
                    <div class="flex-auto ml-2">
                        <p class="text-sm font-bold tracking-wide text-gray-800 line-clamp-2 mb-2">{{ ucwords(strtolower($webinar->extensionService()->name)) }}</p>
                        <p class="text-sm font-semibold tracking-wide text-gray-600 line-clamp-2">{{ ucwords(strtolower($webinar->createdBy()->first_name . ' ' . $webinar->createdBy()->last_name)) }}</p>
                    </div>
                    <div x-data="{ dropdownMenuOpen: false }" class="relative flex-none">
                        <button @click="dropdownMenuOpen = !dropdownMenuOpen" class="relative z-10 block p-2 text-gray-500 hover:text-gray-600 focus:outline-none focus:text-blue-500">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    
                        <div x-show="dropdownMenuOpen" @click="dropdownMenuOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                    
                        <div x-show="dropdownMenuOpen" class="absolute right-0 mt-2 w-48 bg-white rounded-lg border border-gray-200 overflow-hidden shadow-xl z-20">
                            <div x-data="{ modalStatus: false}" @click.away="modalStatus = false">
                                <button @click="modalStatus = !modalStatus" class="text-left appearance-none outline-none ring-0 border-0 w-full focus:outline-none block px-5 py-3 text-sm text-gray-800 border-b hover:bg-gray-100 border-gray-200">
                                    Status <span class="text-gray-400 text-xs"> (Change)</span>
                                </button>
                                
                                <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center" x-show="modalStatus">
                                    <div class="border-1 border-gray-200 rounded-lg shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 p-4 bg-white" 
                                        x-show="modalStatus"  
                                        @click.away="modalStatus = false"
                                        x-on:close-modal-status.window="modalStatus = false"
                                        >
                                        <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                                Change Status
                                            </h3>
        
                                            <hr class="my-4">
        
                                            <div class="mb-3">
                                                <select class="mb-2 w-64 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                    wire:model="status"
                                                >
                                                    <option value="">- Select Status -</option>
                                                    <option value="1">Pending</option>
                                                    <option value="2">Published</option>
                                                </select>
                                            </div>
                                            @error('status')
                                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                                            @enderror
                                            
                                            <div class="flex flex-row-reverse">
                                                <button class="px-4 py-2 uppercase tracking-wide text-xs font-bold rounded-lg bg-blue-500 text-white" 
                                                    wire:click="updateStatus"
                                                    wire:loading.attr="disabled" 
                                                    >
                                                    save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ modalDate: false}" @click.away="modalDate = false">
                                <button @click="modalDate = !modalDate" class="text-left appearance-none outline-none ring-0 border-0 w-full focus:outline-none block px-5 py-3 text-sm text-gray-800 border-b hover:bg-gray-100 border-gray-200">
                                    Date <span class="text-gray-400 text-xs"> (Change)</span>
                                </button>
                                
                                <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center" x-show="modalDate">
                                    <div class="border-1 border-gray-200 rounded-lg shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 p-4 bg-white" 
                                        x-show="modalDate"  
                                        @click.away="modalDate = false"
                                        x-on:close-modal-date.window="modalDate = false"
                                        >
                                        <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                                Change Date
                                            </h3>
        
                                            <hr class="my-4">
        
                                            <div class="mb-3">
                                                <input type="date" class="mb-2 w-64 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                    wire:model="date"
                                                />
                                            </div>
                                            @error('date')
                                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                                            @enderror
                                            
                                            <div class="flex flex-row-reverse">
                                                <button class="px-4 py-2 uppercase tracking-wide text-xs font-bold rounded-lg bg-blue-500 text-white" 
                                                    wire:click="updateDate"
                                                    wire:loading.attr="disabled" 
                                                    >
                                                    save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ modalImage: false}" @click.away="modalImage = false">
                                <button @click="modalImage = !modalImage" class="text-left appearance-none outline-none ring-0 border-0 w-full focus:outline-none block px-5 py-3 text-sm text-gray-800 border-b hover:bg-gray-100 border-gray-200">
                                    Image <span class="text-gray-400 text-xs"> (Change)</span>
                                </button>
                                
                                <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center" x-show="modalImage">
                                    <div class="border border-gray-200 rounded-lg shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 p-4 bg-white" 
                                        x-show="modalImage"  
                                        @click.away="modalImage = false"
                                        x-on:close-modal-image.window="modalImage = false"
                                        >
                                        <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                                Change Image
                                            </h3>
        
                                            <hr class="my-4">
        
                                            <div class="mb-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                    Image
                                                </label>
                                                <label class="w-64 mb-2 appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" for="fileImage"
                                                    x-data="{ fileImage: null }">
                                                    <input type="file" class="sr-only" id="fileImage" x-on:change="fileImage = Object.values($event.target.files)" accept="image/png, image/jpeg"
                                                        wire:model="image"    
                                                    >
                                                    <span class="line-clamp-1" x-text="fileImage ? fileImage.map(file => file.name).join(', ') : 'Choose image...'"></span>
                                                </label>
                                            </div>
                                            @error('image')
                                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                                            @enderror
                                            
                                            <div class="flex flex-row-reverse">
                                                <button class="px-4 py-2 uppercase tracking-wide text-xs font-bold rounded-lg bg-blue-500 text-white" 
                                                    wire:click="updateImage"
                                                    wire:loading.attr="disabled" 
                                                    >
                                                    save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ modalPrice: false}" @click.away="modalPrice = false">
                                <button @click="modalPrice = !modalPrice" class="text-left appearance-none outline-none ring-0 border-0 w-full focus:outline-none block px-5 py-3 text-sm text-gray-800 border-b hover:bg-gray-100 border-gray-200">
                                    Price <span class="text-gray-400 text-xs"> (Change)</span>
                                </button>
                                
                                <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center" x-show="modalPrice">
                                    <div class="border-1 border-gray-200 rounded-lg shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 p-4 bg-white" 
                                        x-show="modalPrice"  
                                        @click.away="modalPrice = false"
                                        x-on:close-modal-price.window="modalPrice = false"
                                        >
                                        <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                                Change Price
                                            </h3>
        
                                            <hr class="my-4">
                                            <div class="mt-1 relative rounded-md shadow-sm mb-3">
                                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                                  <span class="text-gray-700 leading-tight">
                                                    ₱ 
                                                  </span>
                                                </div>
                                                <input class="block w-full pl-10 appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                    placeholder="" type="number"
                                                    wire:model="price" 
                                                    wire:keydown.enter="updatePrice"
                                                    >
                                            </div>
                                            @error('price')
                                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                                            @enderror
                                            
                                            <div class="flex flex-row-reverse">
                                                <button class="px-4 py-2 uppercase tracking-wide text-xs font-bold rounded-lg bg-blue-500 text-white" 
                                                    wire:click="updatePrice"
                                                    wire:loading.attr="disabled" 
                                                    >
                                                    save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ modalDelete: false}" @click.away="modalDelete = false">
                                <a @click="modalDelete = !modalDelete" class="block px-5 py-3 text-sm text-red-500 border-b hover:bg-gray-100 border-gray-200">Delete</a>
                                
                                <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center" x-show="modalDelete">
                                    <div class="border-1 border-gray-200 rounded-lg shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 p-4 bg-white" 
                                        x-show="modalDelete"  
                                        @click.away="modalDelete = false"
                                        >
                                        <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                            <h3 class="text-lg font-medium leading-6 text-red-600">
                                                Delete
                                            </h3>
        
                                            <hr class="my-4">
                                            
                                            <p class="text-gray-800 text-sm italic mb-3">Are you sure you want to delete this webinar?</p>

                                            <div class="flex flex-row-reverse">
                                                <button class="px-4 py-2 uppercase tracking-wide text-xs font-bold rounded-lg bg-red-500 text-white" 
                                                    wire:click="delete"
                                                    wire:loading.attr="disabled" 
                                                    >
                                                    delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- title --}}
                <div class="flex flex-initial w-full my-4" x-data="{ modalTitle: false }" @click.away="modalTitle = false">
                    <div class="flex-auto">
                        <div class=" text-gray-700 flex items-center text-sm text-gray-800 tracking-wide font-semibold w-full mb-0 mr-2">
                            <div class="flex-grow">
                                <p class="bg-transparent text-base font-bold text-gray-800 border-0  tracking-wide w-full mb-0 py-0 px-0">
                                    {{ $webinar->title }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <a @click="modalTitle = !modalTitle" class="ml-1 bg-white flex-none justify-items-center rounded-full w-6 h-8 flex justify-center pt-2 mt-1">
                        <i class="fas fa-pen text-gray-300 fa-xs"></i>
                    </a>
                    <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center" x-show="modalTitle">
                        <div class="border border-gray-200 rounded-lg shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 p-4 bg-white" 
                            x-show="modalTitle"  
                            @click.away="modalTitle = false"
                            x-on:close-modal-title.window="modalTitle = false"
                            >
                            <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">
                                    Edit Title
                                </h3>
                    
                                <hr class="my-4">

                                <div class="mb-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Title
                                    </label> 
                                    <input class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        wire:model="title" 
                                        wire:keydown.enter="updateTitle()"
                                        type="text"
                                    />
                                </div>
                                
                                <div class="w-full">
                                    <small class="text-blue-400">Press enter to save</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- speaker --}}
                <div class="flex flex-initial w-full mb-4" x-data="{ modalSpeaker: false}" @click.away="modalSpeaker = false">
                    <div class="flex-auto">
                        <div class=" text-gray-700 flex items-center text-sm text-gray-800 tracking-wide font-semibold w-full mb-0 mr-2">
                            <div class="flex-grow">
                                <p class="bg-transparent text-xs font-semibold text-gray-500 border-0  tracking-wide w-full mb-0 py-0 px-0">
                                    {{ $webinar->speaker }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <a @click="modalSpeaker = !modalSpeaker" class="ml-1 bg-white flex-none justify-items-center rounded-full w-6 h-8 flex justify-center pt-2 mt-1">
                        <i class="fas fa-pen text-gray-300 fa-xs"></i>
                    </a>
                    <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center" x-show="modalSpeaker">
                        <div class="border border-gray-200 rounded-lg shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 p-4 bg-white" 
                            x-show="modalSpeaker"  
                            @click.away="modalSpeaker = false"
                            x-on:close-modal-speaker.window="modalSpeaker = false"
                            >
                            <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">
                                    Edit Speaker
                                </h3>

                                <hr class="my-4">

                                <div class="mb-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Speaker
                                    </label> 
                                    <input class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        wire:model="speaker" 
                                        wire:keydown.enter="updateSpeaker()"
                                        type="text"
                                    />
                                </div>
                                <div class="w-full">
                                    <small class="text-blue-400">Press enter to save</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                {{-- about --}}
                <div class="text-sm font-medium tracking-wide my-4 leading-relaxed" x-data="{ about_seemore: false }">
                    <p class="text-gray-600 line-clamp-6" :class="{ 'line-clamp-none': about_seemore }">
                        {{ $webinar->about }} 
                    </p>
                    <span class="text-blue-700 cursor-pointer" @click="about_seemore = !about_seemore">see 
                        <template x-if="about_seemore">
                            <span>less</span>
                        </template>
                        <template x-if="!about_seemore">
                            <span>more</span>
                        </template>
                    </span>
                    <div class="inline-block" x-data="{ modalAbout: false }" @click.away="modalAbout = false">
                        <a @click="modalAbout = !modalAbout" class="ml-1 bg-white flex-none justify-items-center rounded-full w-6 h-8 flex justify-center pt-2 mt-1">
                            <i class="fas fa-pen text-gray-300 fa-xs"></i>
                        </a>
                        <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center" x-show="modalAbout">
                            <div class="border border-gray-200 rounded-lg shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 p-4 bg-white" 
                                x-show="modalAbout"  
                                @click.away="modalAbout = false"
                                x-on:close-modal-about.window="modalAbout = false"
                                >
                                <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                                        Edit About
                                    </h3>
                        
                                    <hr class="my-4">

                                    <div class="mb-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                            Speaker
                                        </label> 
                                        <textarea class=" w-96 mb-2 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            wire:model="about" 
                                            wire:keydown.enter="updateAbout()"
                                            rows="10"
                                        ></textarea>
                                    </div>
                                    
                                    <div class="w-full">
                                        <small class="text-blue-400">Press enter to save</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <p class="text-base font-bold">
                            @if($webinar->price)
                            ₱ {{ $webinar->price }}
                            @else 
                            FREE 
                            @endif
                        </p>
                    </div>
                    <div class="col-span-1 text-right">
                        <p class="bg-{{$webinar->status_color() }}-400 rounded-full px-2 py-1 inline-block mb-1 text-sm text-white font-semibold">
                            {{ ucwords($webinar->status_name()) }}
                        </p>
                    </div>
                </div>
                {{-- counts --}}
                <div>
                    <p class="text-sm font-bold tracking-wide text-gray-800 my-4">Webinar <span class="text-gray-500">Achievements</span></p>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div class="flex flex-col w-full p-4 bg-gray-100 rounded-lg">
                        <i class="fas fa-users fa-lg text-green-400 mb-4"></i>
                        <span class="text-lg font-bold text-gray-800 mb-2 text-center">{{ $webinar->Enrolled()->count() }}</span>
                        <p class="text-xs font-semibold tracking-wide text-gray-500 text-center">Enrolled</p>
                    </div>
                    <div class="flex flex-col w-full p-4 bg-gray-100 rounded-lg">
                        <i class="fas fa-check-double fa-lg text-pink-400 mb-4"></i>
                        <span class="text-lg font-bold text-gray-800 mb-2 text-center">{{ $webinar->completed()->count() }}</span>
                        <p class="text-xs font-semibold tracking-wide text-gray-500 text-center">Completed</p>
                    </div>
                    <div class="flex flex-col w-full p-4 bg-gray-100 rounded-lg">
                        <i class="fas fa-comments fa-lg text-purple-400 mb-4"></i>
                        <span class="text-lg font-bold text-gray-800 mb-2 text-center">{{ $webinar->review()->count() }}</span>
                        <p class="text-xs font-semibold tracking-wide text-gray-500 text-center">Reviews</p>
                    </div>
                </div>

                {{-- webinar links --}}
                <div class="flex justify-between">
                    <p class="text-sm font-bold tracking-wide text-gray-800 my-4">Webinar <span class="text-gray-500">Links</span></p>
                    <a wire:click="editOption" class="justify-items-center flex justify-center items-center">
                        <i class="fas fa-pen text-gray-400 fa-xs"></i>
                    </a>
                </div>

                {{-- youtube link --}}
                <div class="mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="video_link">
                        Youtube Link
                    </label> 
                    <div class="relative rounded-md">
                        <div class="absolute inset-y-0 left-0 pl-0 flex items-center pointer-events-none">
                            <span class="text-gray-800 leading-tight text-sm pl-4">
                                https://youtu.be/
                            </span>
                        </div>
                        <input class="appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 text-sm px-4 leading-tight focus:outline-none pl-32"
                            placeholder="" type="text"
                            wire:model="video_link"
                            @if($edit_option == false)
                            readonly
                            @endif
                        >
                    </div>  
                    @error('video_link')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- evaluation link --}}
                <div class="mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="evaluation_link">
                        Evaluation Link
                    </label> 
                    <input class="appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 text-sm px-4 leading-tight focus:outline-none"
                        wire:model="evaluation_link" 
                        id="evaluation_link"
                        type="text"
                        placeholder="https://"
                        @if($edit_option == false)
                        readonly
                        @endif
                    />
                    @error('evaluation_link')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                @if($ecert_option == false)
                    {{-- ecertificate link --}}
                    <div class="mb-4">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="ecertificate_link">
                            E-Certificate Link
                        </label> 
                        <input class="appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 text-sm px-4 leading-tight focus:outline-none"
                            wire:model="ecertificate_link" 
                            id="ecertificate_link"
                            type="text"
                            placeholder="https://"
                        />
                        @error('ecertificate_link')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                @else 
                    {{-- ecertificate template --}}
                    <div class="mb-4">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="ecertificate_link">
                            E-Certificate Template @if($ecertificate_id) <a class="text-gray-300 ml-2" href="{{ url('program-coordinator/ecertificate-template/'.$ecertificate_id) }}" target="_blank">(Click to view template)</a> @endif
                        </label> 
                        <select class="appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 text-sm px-4 leading-tight focus:outline-none"
                            @if($edit_option == false)
                            disabled
                            @endif
                            wire:model="ecertificate_id" 
                            >
                            <option value="">- Select Template -</option>
                            @foreach($ecertificate_templates as $ecertificate_template)
                                <option value="{{ $ecertificate_template->id }}">{{ $ecertificate_template->name }}</option>
                            @endforeach
                        </select>
                        @error('ecertificate_id')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                @endif

                @if($edit_option == true)
                    {{-- ecert checkbox --}}
                    <div class="form-check mb-4">
                        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                            type="checkbox" value="" id="chkboxEcertTemplate"
                            wire:model="ecert_option">
                        <label class="form-check-label inline-block text-gray-800 text-sm" for="chkboxEcertTemplate">
                            Use E-Certificate Template
                        </label>
                    </div>
                @endif

                {{-- registration link --}}
                <div class="mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="registration_link">
                        Registration Link
                    </label> 
                    <input class="appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 text-sm px-4 leading-tight focus:outline-none"
                        wire:model="registration_link" 
                        id="registration_link"
                        type="text"
                        placeholder="https://"
                        @if($edit_option == false)
                        readonly
                        @endif
                        
                    />
                    @error('registration_link')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- webinar link --}}
                <div class="mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="webinar_link">
                        Webinar Link
                    </label> 
                    <input class="appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 text-sm px-4 leading-tight focus:outline-none"
                        wire:model="webinar_link" 
                        id="webinar_link"
                        type="text"
                        placeholder="https://"
                        @if($edit_option == false)
                        readonly
                        @endif
                    />
                    @error('webinar_link')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- registration and webinar checkbox --}}
                @if($edit_option == true)
                    <div class="form-check mb-4">
                        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                            type="checkbox" value="" id="chkboxRedirectRegistration"
                            wire:model="redirect_registration_option">
                        <label class="form-check-label inline-block text-gray-800 text-sm" for="chkboxRedirectRegistration">
                            Redirect to Registration and Webinar Link
                        </label>
                    </div>
                @endif

                @if($edit_option == true)
                    <div class="flex justify-between w-full">
                        <button class="px-4 py-2 uppercase tracking-wide text-gray-700 text-sm font-bold border border-gray-700 rounded-lg bg-white" 
                            wire:click="closeEdit"
                            >
                            Close
                        </button>
                        <button class="px-4 py-2 uppercase tracking-wide text-white text-sm font-bold  rounded-lg bg-blue-500" 
                            wire:click="updateLinks"
                            wire:loading.attr="disabled" 
                            >
                            Update Links
                        </button>
                    </div>
                @endif

            </div>


            {{-- right panel --}}
            <div class="md:col-span-8 px-8 col-span-full" x-data="{ tab: 'video'}">
                {{-- image and video tabs --}}
                <div class="flex justify-between py-2">
                    <p class="text-gray-800 tracking-wide text-xs font-bold">
                        {{ carbon\carbon::parse($webinar->date)->format('M d, Y') }}
                    </p>
                    <ul class="inline-flex px-4">
                        <li class="font-bold text-xs mx-2 cursor-pointer tracking-wide lowercase" :class="tab === 'video' ? 'text-gray-800' : 'text-gray-300'">
                            <a @click="tab = 'video'">Video</a>
                        </li>
                        <li class="font-bold text-xs mx-2 cursor-pointer tracking-wide lowercase"  :class="tab === 'image' ? 'text-gray-800' : 'text-gray-300'">
                            <a @click="tab = 'image'" >Image</a>
                        </li>
                    </ul>
                </div>
                <!-- Tab Contents -->
                <div id="tab-contents">

                    {{-- video tab --}}
                    <template x-if="tab == 'video'" class="p-4">
                        <span>
                            @if($webinar->video_link)
                                <div class="aspect-w-16 aspect-h-9">
                                    <iframe class="rounded-lg" width="560" height="315" src="https://www.youtube.com/embed/{{ $webinar->video_link }}?rel=0" frameborder="0" modestbranding="1" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            @else
                                <div class="bg-gray-200 aspect-w-16 aspect-h-9 rounded-lg">

                                </div>
                            @endif
                        </span>
                    </template>

                    {{-- image tab --}}

                    <template x-if="tab == 'image'">
                        <span>
                            {{-- <div class="relative pt-12 pb-1/4">
                                <img class="absolute w-full object-cover h-full rounded-lg" src="{{ asset('storage/image/webinars/'.$webinar->image) }}" alt="{{ $webinar->title }}">        
                            </div> --}}
                            <div class="relative flex flex-col items-center justify-center pt-12 pb-2/4">

                                <img  src="{{ asset('storage/image/webinars/'.$webinar->image) }}" alt="{{ $webinar->title }}"
                                class="absolute rounded-lg w-full h-full object-cover inset-0">
                                
                            </div>
                        </span>
                    </template>
                </div>

                {{-- topics --}}
                <div class="text-right text-xs tracking-wide font-semibold text-white pt-2" x-data="{ modalFieldOfInterest: false }" wire:poll>
                    @foreach($this->webinar_field_of_interests as $value)
                        <p class="bg-blue-400 rounded-full px-2 py-1 inline-block mb-1">
                            {{ $value->name }}
                            <button wire:click="removeTopic({{ $value->id }})" wire:loading.attr="disabled"  class="focus:outline-none outline-none border-0"><i class="fas fa-times ml-1 fa-xs cursor-pointer"></i></button>
                        </p>
                    @endforeach
                    <p class="bg-blue-400 rounded-full px-2 py-1 inline-block cursor-pointer" @click="modalFieldOfInterest = true">
                        <i class="fas fa-plus fa-xs cursor-pointer"></i>
                    </p>

                    <div class="mt-6 fixed top-0 left-0 w-full z-40 flex items-center justify-center" x-show="modalFieldOfInterest">
                        <div class="border border-gray-200 rounded-lg shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 p-4 bg-white" 
                            x-show="modalFieldOfInterest"  
                            @click.away="modalFieldOfInterest = false"
                            x-on:close-modal-insert-topic.window="modalFieldOfInterest = false"
                            >
                            <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">
                                    Add Topic
                                </h3>
                    
                                <div class="mt-2 mb-4">
                                    <div class="inline-block relative w-64">
                                        <select wire:model="new_field_of_interest_id" class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                            <option value="">- Select Topic -</option>
                                            @foreach($this->fieldOfInterests as $fieldOfInterest)
                                                <option value="{{ $fieldOfInterest->id }}">{{ $fieldOfInterest->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="flex flex-row-reverse">
                                    <button class="px-4 py-2 text-sm rounded-lg {{ $new_field_of_interest_id != null ? 'bg-blue-500':'bg-gray-400 cursor-not-allowed' }}" 
                                        wire:click="insertTopic" @if($new_field_of_interest_id == null) disabled @endif
                                        wire:loading.attr="disabled" 
                                        >
                                        save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @livewire('program-coordinator.webinar.review-index', ['id' => $webinar->id])
            </div>
        </div>
    </div>
</div>
