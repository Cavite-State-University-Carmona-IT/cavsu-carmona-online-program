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
                    
                        <div x-show="dropdownMenuOpen" class="absolute right-0 mt-2 w-48 bg-white rounded-lg overflow-hidden shadow-xl z-20">
                          <a href="#" class="block px-5 py-3 text-sm text-gray-800 border-b hover:bg-gray-100 border-gray-200">Edit Status</a>
                          <a href="#" class="block px-5 py-3 text-sm text-red-500 border-b hover:bg-gray-100 border-gray-200">Delete</a>
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
                        <div class="border border-gray-200 rounded-2xl shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 md:mx-0 bg-white" 
                            x-show="modalTitle"  
                            @click.away="modalTitle = false"
                            x-on:close-modal-title.window="modalTitle = false"
                            >
                            <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">
                                    Edit Title
                                </h3>
                    
                                <div class="mt-2 mb-4">
                                    <div class="inline-block relative w-64">
                                        <input class=" block w-full text-gray-800 text-sm border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                                            wire:model="title" 
                                            wire:keydown.enter="updateTitle()"
                                            />
                                    </div>
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
                        <div class="border border-gray-200 rounded-2xl shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 md:mx-0 bg-white" 
                            x-show="modalSpeaker"  
                            @click.away="modalSpeaker = false"
                            x-on:close-modal-speaker.window="modalSpeaker = false"
                            >
                            <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">
                                    Edit Speaker
                                </h3>
                    
                                <div class="mt-2 mb-4">
                                    <div class="inline-block relative w-64">
                                        <input class=" block w-full text-gray-800 text-sm border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                                            wire:model="speaker" 
                                            wire:keydown.enter="updateSpeaker()"
                                            />
                                    </div>
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
                            <div class="border border-gray-200 rounded-2xl shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 md:mx-0 bg-white" 
                                x-show="modalAbout"  
                                @click.away="modalAbout = false"
                                x-on:close-modal-about.window="modalAbout = false"
                                >
                                <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                                        Edit About
                                    </h3>
                        
                                    <div class="mt-2 mb-4">
                                        <div class="inline-block relative w-64">
                                            <textarea class=" block w-full text-gray-800 text-sm border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                                                wire:model="about" 
                                                wire:keydown.enter="updateAbout()"
                                                rows="15"
                                            ></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="w-full">
                                        <small class="text-blue-400">Press enter to save</small>
                                    </div>
                                </div>
                            </div>
                        </div>
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

                {{-- links --}}
                <div>
                    <p class="text-sm font-bold tracking-wide text-gray-800 my-4">Webinar <span class="text-gray-500">Links</span></p>
                </div>
                <div class="flex flex-col">
                    {{-- video link --}}
                    <div class="flex flex-initial w-full p-4 bg-gray-100 rounded-lg my-2" x-data="{ input_video_link: false}" @click.away="input_video_link = false">
                        <div class="bg-green-400 flex-none justify-items-center rounded-lg w-10 h-10 flex justify-center pt-3">
                            <i class="fab fa-youtube text-white"></i>
                        </div>
                        <div class="ml-4 flex-auto">
                            <div class=" text-gray-700 flex items-center text-sm text-gray-800 tracking-wide font-semibold w-full rounded-md mb-0 mr-2"
                                :class="input_video_link ? 'bg-white' : 'bg-transparent'"
                                >
                                <div class="">
                                  <label for="forms-labelLeftInputCode">https://youtu.be/</label>
                                </div>
                                <div class="flex-grow">
                                  <input class="bg-transparent outline-none text-sm border-0 text-gray-800 tracking-wide font-semibold w-full rounded-md mb-0 py-0 px-0 focus:ring-0" type="text" 
                                    x-bind:disabled="!input_video_link"
                                    value="{{ $webinar->video_link }}"
                                  />
                                </div>
                            </div>
                            <p class="text-xs tracking-wide text-gray-400">youtube link</p>
                        </div>
                        <a @click="input_video_link = !input_video_link" class="ml-3 bg-white flex-none justify-items-center rounded-full w-8 h-8 flex justify-center pt-2 mt-1">
                            <i class="fas fa-pen text-gray-400 fa-sm"></i>
                        </a>
                    </div>

                    {{-- evaluation link --}}
                    <div class="flex flex-initial w-full p-4 bg-gray-100 rounded-lg my-2" x-data="{ input_eval_link: false}" @click.away="input_eval_link = false">
                        <div class="bg-red-500 flex-none justify-items-center rounded-lg w-10 h-10 flex justify-center pt-3">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                        <div class="flex-auto ml-4 h-10">
                            <input class="outline-none text-sm text-gray-800 tracking-wide font-semibold w-full rounded-md mb-0"
                             :class="input_eval_link ? 'bg-white' : 'bg-bg-transparent'"
                             x-bind:disabled="!input_eval_link"
                             value="{{ $webinar->evaluation_link }}"
                             placeholder="N/A"
                            >
                            <p class="text-xs tracking-wide text-gray-400">evaluation link</p>
                        </div>
                        <a @click="input_eval_link = !input_eval_link" class="ml-3 bg-white flex-none justify-items-center rounded-full w-8 h-8 flex justify-center pt-2 mt-1">
                            <i class="fas fa-pen text-gray-400 fa-sm"></i>
                        </a>
                    </div>

                    {{-- ecertificate link --}}
                    <div class="flex flex-initial w-full p-4 bg-gray-100 rounded-lg my-2" x-data="{ input_ecert_link: false}" @click.away="input_ecert_link = false">
                        <div class="bg-gray-800 flex-none justify-items-center rounded-lg w-10 h-10 flex justify-center pt-3">
                            <i class="fas fa-certificate text-white"></i>
                        </div>
                        <div class="flex-auto ml-4 h-10">
                            <input class="outline-none text-sm text-gray-800 tracking-wide font-semibold w-full rounded-md mb-0"
                             :class="input_ecert_link ? 'bg-white' : 'bg-bg-transparent'"
                             x-bind:disabled="!input_ecert_link"
                             value="{{ $webinar->ecertificate_link }}"
                             placeholder="N/A"
                            >
                            <p class="text-xs tracking-wide text-gray-400">e-certificate link</p>
                        </div>
                        <a @click="input_ecert_link = !input_ecert_link" class="ml-3 bg-white flex-none justify-items-center rounded-full w-8 h-8 flex justify-center pt-2 mt-1">
                            <i class="fas fa-pen text-gray-400 fa-sm"></i>
                        </a>
                    </div>
                </div>
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
                            <div class="aspect-w-16 aspect-h-9">
                                <iframe class="rounded-2xl" width="560" height="315" src="https://www.youtube-nocookie.com/embed/{{ $webinar->video_link }}?rel=0" frameborder="0" modestbranding="1" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </span>
                    </template>

                    {{-- image tab --}}
                    <template x-if="tab == 'image'">
                        <span>
                            <div class="">
                                <button class="focus:outline-none focus:ring-2 focus:ring-green-400 border-0 absolute right-0 mr-10 mt-2 bg-white text-gray-400 p-2 justify-center flex rounded-full overflow-hidden shadow-xl z-20 bg-opacity-60">
                                    <i class="fas fa-pen fa-sm"></i>
                                </button>
                                <img class="w-full object-cover h-auto rounded-2xl" src="{{ asset('storage/image/webinars/'.$webinar->image) }}" alt="{{ $webinar->title }}">
                            </div>
                        </span>
                    </template>
                </div>

                {{-- topics --}}
                <div class="text-right text-xs tracking-wide font-semibold text-white py-4" x-data="{ modalFieldOfInterest: false }" wire:poll>
                    @foreach($this->webinar_field_of_interests as $value)
                        <p class="bg-blue-600 rounded-full px-2 py-1 inline-block">
                            {{ $value->name }}
                            <button wire:click="removeTopic({{ $value->id }})" wire:loading.attr="disabled"  class="focus:outline-none outline-none border-0"><i class="fas fa-times ml-1 fa-xs cursor-pointer"></i></button>
                        </p>
                    @endforeach
                    <p class="bg-blue-600 rounded-full px-2 py-1 inline-block cursor-pointer" @click="modalFieldOfInterest = true">
                        <i class="fas fa-plus fa-xs cursor-pointer"></i>
                    </p>

                    <div class="mt-6 fixed top-0 left-0 w-full z-40 flex items-center justify-center" x-show="modalFieldOfInterest">
                        <div class="border border-gray-200 rounded-2xl shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 md:mx-0 bg-white" 
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
                                        <select wire:model="new_field_of_interest_id" class="block w-full text-gray-800 text-sm border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
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

                <p class="text-sm font-bold tracking-wide text-gray-800 my-4">Webinar <span class="text-gray-500">Reviews</span></p>
            </div>
        </div>
    </div>
</div>

