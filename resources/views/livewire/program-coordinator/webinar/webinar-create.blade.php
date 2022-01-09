<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="max-w-full pt-16 mt-2 bg-white">
        <div class="grid grid-cols-12">
            {{-- left panel --}}
            <div class="md:col-span-5 col-start-1 p-8 border-r-gray-200 md:border-r col-span-full">
                {{-- extension service --}}
                <div class="mb-4">
                    <div class="flex w-full p-4 bg-gray-100 rounded-lg">
                        <div class="flex-none">
                            <img class="object-cover w-12 h-12 rounded-full" src="{{ asset('storage/image/extension-services/'.$this->extension_service_image) }}">
                        </div>
                        <div class="flex-auto ml-2">
                            <select wire:model="extension_service" class="rounded-md focus:ring-gray-300 focus:ring-2 pt-2 pb-1 pl-3 text-sm font-bold tracking-wide text-gray-800 w-full border-0 bg-transparent">
                                <option>- Select Extension Service -</option>
                                @foreach($extension_services as $extension_service)
                                    <option value="{{ $extension_service->id }}">{{ ucwords(strtolower($extension_service->name))}}</option>
                                @endforeach
                            </select>
                            <p class="pl-3 text-sm font-semibold tracking-wide text-gray-600 line-clamp-2">Extension Service</p>
                        </div>
                    </div>
                    @error('extension_service')
                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- title --}}
                <div class="mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                        Title
                    </label> 
                    <input class="appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 text-sm px-4 leading-tight focus:outline-none"
                        wire:model="title" 
                        type="text"
                        id="title"
                    />
                    @error('title')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                {{-- speaker --}}
                <div class="mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="speaker">
                        Speaker
                    </label> 
                    <input class="appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 text-sm px-4 leading-tight focus:outline-none"
                        wire:model="speaker" id="speaker"
                        type="text"
                    />
                    @error('speaker')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                {{-- about --}}
                <div class="mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="about">
                        About
                    </label> 
                    <textarea class=" text-sm appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 px-4 leading-tight focus:outline-none"
                        wire:model="about" 
                        rows="6"
                        id="about"
                    ></textarea>
                    @error('about')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- price and status --}}
                <div class="mb-4 grid grid-cols-2 gap-2">
                    <div class="col-span-1">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
                            Price
                        </label> 
                        <input class="text-sm  appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 px-4 leading-tight focus:outline-none"
                            wire:model="price" 
                            type="number"
                            id="price"
                        />
                        @error('price')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="status">
                            Status
                        </label> 
                        <select class="text-sm appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 px-4 leading-tight focus:outline-none"
                            wire:model="status"
                            id="status"
                            >
                            <option value="">- Select status -</option>
                            <option value="1">Pending</option>
                            <option value="2">Publish</option>
                        </select>
                        @error('status')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                {{-- date and duration --}}
                <div class="mb-4 grid grid-cols-2 gap-2">
                    <div class="col-span-1">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="date">
                            Date
                        </label> 
                        <input class="text-sm appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 px-4 leading-tight focus:outline-none"
                            wire:model="date" 
                            type="date"
                            id="date"
                        />
                        @error('date')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="duration">
                            Duration <small class="text-gray-400 ml-2">(minutes)</small>
                        </label> 
                        <input class="text-sm appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 px-4 leading-tight focus:outline-none"
                            wire:model="duration" 
                            type="number"
                            id="duration"
                        />
                        @error('duration')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- image --}}
                <div class="mb-2">
                    <div class="w-full">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Upload <small class="text-gray-400 ml-2">Image(jpg,png)</small>
                        </label> 
                        <label class="flex flex-col w-full hover:bg-gray-100">
                            <div class="relative flex flex-col items-center justify-center pt-12 pb-1/4">

                                <img @if($image) src="{{ $image->temporaryUrl() }}" @endif 
                                class="absolute rounded-lg w-full h-full object-cover border-dashed border-4 border-gray-100 inset-0">
                                <i class="far fa-image fa-3x text-gray-300 group-hover:text-gray-400"></i>
                                <p class="pt-1 text-sm tracking-wider font-semibold text-gray-300 group-hover:text-gray-400">
                                    Select a photo
                                </p>
                                <input type="file" class="opacity-0" accept="image/*" wire:model="image"/>
                            </div>
                        </label>
                    </div>
                    @error('image')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- topics --}}
                <div class="mb-4">
                    <div class="text-left text-xs tracking-wide font-semibold text-white pt-2" x-data="{ modalFieldOfInterest: false }">
                        <p class="bg-blue-400 rounded-full px-2 py-1 inline-block mb-1 cursor-pointer" @click="modalFieldOfInterest = true">
                            <i class="fas fa-plus fa-xs cursor-pointer"></i> Add Topic
                        </p>
                        @if($selected_topics)
                            @foreach($this->selected_topics as $selected_topic)
                                <p class="bg-blue-400 rounded-full px-2 py-1 inline-block mb-1">
                                    {{ $selected_topic->name }}
                                    <button wire:click="removeTopic({{ $selected_topic->id }})" wire:loading.attr="disabled"  class="focus:outline-none outline-none border-0">
                                        <i class="fas fa-times ml-1 fa-xs cursor-pointer"></i>
                                    </button>
                                </p>
                            @endforeach
                        @endif
                        

                        <div class="mt-6 fixed top-0 left-0 w-full z-40 flex items-center justify-center" x-show="modalFieldOfInterest" >
                            <div class="border border-gray-200 rounded-lg shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 p-4 bg-white" @click.away="modalFieldOfInterest = false"
                                x-show="modalFieldOfInterest"  
                                x-on:close-modal-add-topic.window="modalFieldOfInterest = false"
                                >
                                <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                                        Add Topic
                                    </h3>
                        
                                    <div class="mt-2 mb-2">
                                        <div class="inline-block relative w-64">
                                            <select wire:model="selected_topic_id" class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option value="">- Select Topic -</option>
                                                @foreach($this->field_of_interests as $field_of_interest)
                                                    <option value="{{ $field_of_interest->id }}">{{ $field_of_interest->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('selected_topic_id')
                                        <p class="text-red-500 text-xs italic mb-4">{{ $message }}</p>
                                    @enderror
                                    <div class="flex flex-row-reverse">
                                        <button class="px-4 py-2 text-sm rounded-lg bg-blue-500" 
                                            wire:click="addTopic"
                                            wire:loading.attr="disabled" 
                                            >
                                            save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('topic_ids')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

            </div>
            {{-- right panel --}}
            <div class="md:col-span-7 px-8 py-4 col-span-full">

                {{-- video --}}
                <div class="mb-4">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="rounded-lg" width="560" height="315" src="https://www.youtube.com/embed/{{ $video_link }}?rel=0" frameborder="0" modestbranding="1" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
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
                            E-Certificate Template
                        </label> 
                        <select class="appearance-none block w-full bg-transparent focus:ring-0 focus:border-gray-100 focus:bg-gray-100 text-gray-700 border border-gray-300 rounded py-2 text-sm px-4 leading-tight focus:outline-none"
                            wire:model="selected_ecert_template" 
                            >
                            <option value="">- Select Template -</option>
                            @foreach($ecertificate_templates as $ecertificate_template)
                                <option value="{{ $ecertificate_template->id }}">{{ $ecertificate_template->name }}</option>
                            @endforeach
                        </select>
                        @error('selected_ecert_template')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                @endif
                
                {{-- ecert checkbox --}}
                <div class="form-check mb-4">
                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                        type="checkbox" value="" id="chkboxEcertTemplate"
                        wire:model="ecert_option">
                    <label class="form-check-label inline-block text-gray-800 text-sm" for="chkboxEcertTemplate">
                        Use E-Certificate Template
                    </label>
                </div>

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
                    />
                    @error('webinar_link')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- ecert checkbox --}}
                <div class="form-check mb-4">
                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                        type="checkbox" value="" id="chkboxRedirectRegistration"
                        wire:model="redirect_registration_option">
                    <label class="form-check-label inline-block text-gray-800 text-sm" for="chkboxRedirectRegistration">
                        Redirect to Registration and Webinar Link
                    </label>
                </div>
                <div class="flex flex-row-reverse w-full">
                    <button class="px-4 py-2 uppercase tracking-wide text-white text-sm font-bold  rounded-lg bg-blue-500" 
                        wire:click="submit"
                        wire:loading.attr="disabled" 
                        >
                        Save Webinar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>