<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="max-w-full pt-16 mt-2 bg-white">
        <div class="grid grid-cols-3 w-full px-4 md:px-12 lg:px-40 py-0 md:py-9 h-full">

            {{-- left panel --}}
            <div class="col-span-1 hidden md:block py-5 border-r border-gray-200">
                <div class="w-full px-9">
                    <div class="text-gray-500 font-bold text-lg mb-2">Registration Form</div>
                    <div class="text-gray-400 text-xs">Create Account</div>
                </div>
                <hr class=" m-6">
                <div class="pl-10">
                    <div class="grid grid-rows-3 text-left text-sm">
                        <div class="row-span-1 flex">
                            <div class="bg-gray-200 w-1 flex-none py-5">
                                <div class="w-full h-full {{ $section_page == 0 ? 'bg-green-300':'bg-gray-200'}}">
                                </div>
                            </div>
                            <p class="outline-none p-6 {{ $section_page == 0 ? 'text-gray-800 font-bold':'text-gray-500 font-semibold' }}">
                                Personal Information
                            </p>
                        </div>

                        <div class="row-span-1 flex">
                            <div class="bg-gray-200 w-1 flex-none py-5">
                                <div class="w-full h-full {{ $section_page == 1 ? 'bg-green-300':'bg-gray-200'}}">
                                </div>
                            </div>
                            <p class="outline-none p-6 {{ $section_page == 1 ? 'text-gray-800 font-bold':'text-gray-500 font-semibold' }}">
                                Field of Interest
                            </p>
                        </div>
                        
                        <div class="row-span-1 flex">
                            <div class="bg-gray-200 w-1 flex-none py-5">
                                <div class="w-full h-full {{ $section_page ==2  ? 'bg-green-300':'bg-gray-200'}}">
                                </div>
                            </div>
                            <p class="outline-none p-6 {{ $section_page == 2 ? 'text-gray-800 font-bold':'text-gray-500 font-semibold' }}">
                                Account
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- right panel --}}
            <div class="md:col-span-2 col-span-3 py-4 md:py-5 px-7">
    
                @if($section_page == 0)
                    {{-- personal information --}}
                    <div class="">
                        <div class="flex justify-between border-b border-gray-200 mb-3">
                            <div class="text-gray-700 font-bold text-lg mb-2">Personal Information</div>
                            </div>
                            {{-- content --}}
                            <div class="">
                
                            {{-- full name --}}
                            <div class="grid grid-cols-3 gap-4 mb-3">
                                {{-- last name --}}
                                <div class="col-span-full md:col-span-1">
                                    <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                        Last Name
                                    </label> 
                                    <input class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        type="text" 
                                        wire:model="last_name"
                                    />
                                    @error('last_name')
                                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- first name --}}
                                <div class="col-span-full md:col-span-1">
                                    <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                        First Name
                                    </label> 
                                    <input class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        type="text" 
                                        wire:model="first_name"
                                    />
                                    @error('first_name')
                                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- middle name --}}
                                <div class="col-span-full md:col-span-1">
                                    <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                        Middle Name
                                    </label> 
                                    <input class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        type="text" 
                                        wire:model="middle_name"
                                    />
                                    @error('middle_name')
                                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                    
                            {{-- gender, bday, marital status --}}
                            <div class="grid grid-cols-3 gap-4 mb-3">
                                {{-- gender --}}
                                <div class="col-span-full md:col-span-1">
                                    <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                        Gender
                                    </label> 
                                    <select class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        wire:model="gender"
                                        >
                                        <option value="">- Select gender -</option>
                                        @foreach(config('custom-user.gender') as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>

                                    @error('gender')
                                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- marital status --}}
                                <div class="col-span-full md:col-span-1">
                                    <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                        Marital Status
                                    </label> 
                                    <select class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        wire:model="marital_status"
                                        >
                                        <option value="">- Select marital status -</option>
                                        @foreach(config('custom-user.marital_status') as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('marital_status')
                                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- middle name --}}
                                <div class="col-span-full md:col-span-1">
                                    <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                        Birth Date
                                    </label> 
                                    <input class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        type="date" 
                                        wire:model="birth_date"
                                    />
                                    @error('birth_date')
                                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- address --}}
                            <div class="mb-3">
                                <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                    Address
                                </label> 
                                <textarea class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    rows="2"
                                    wire:model="address">
                                </textarea>
                                @error('address')
                                    <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- highest educ attainment, employment status, incom --}}
                            <div class="grid grid-cols-11 gap-4 mb-3">
                                {{-- highest educational attainment --}}
                                <div class="col-span-full md:col-span-5">
                                    <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                        Highest Education Attainment
                                    </label> 
                                    <select class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        wire:model="highest_educational_attainment"
                                        >
                                        @foreach(config('custom-user.highest_educational_attainment') as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>

                                    @error('highest_educational_attainment')
                                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- employment status --}}
                                <div class="col-span-full md:col-span-3">
                                    <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                        Employment Status
                                    </label> 
                                    <select class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        wire:model="employment_status"
                                        >
                                        @foreach(config('custom-user.employment_status') as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('employment_status')
                                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- middle name --}}
                                <div class="col-span-full md:col-span-3">
                                    <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                        Income <span class="text-gray-400">(optional)</span>
                                    </label> 
                                    <input class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        type="number" 
                                        wire:model="income"
                                    />
                                    @error('income')
                                        <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-end py-4 border-t border-gray-200">
                                {{-- <button class="px-4 py-2 uppercase tracking-wide text-gray-500 text-sm font-bold  rounded-lg border border-gray-500" 
                                    >
                                    Back
                                </button> --}}

                                <button class="ml-3 px-4 py-2 uppercase tracking-wide text-white text-sm font-bold  rounded-lg bg-blue-500" 
                                    wire:click="validatePersonalInformation"
                                    wire:loading.attr="disabled" 
                                    >
                                    Next
                                </button>
                            </div>

                        </div>
                    </div>
                @elseif($section_page == 1)
                    {{-- field of interest --}}
                    <div class="">
                        <div class="flex justify-between border-b border-gray-200 mb-3">
                            <div class="text-gray-700 font-bold text-lg mb-2">Field of Interests</div>
                            </div>
                            {{-- content --}}
                            <div class="">
                
                            {{-- table --}}

                            <div class="w-full my-2">
                                @foreach($extension_services as $key => $field_of_interests)
                                    <div class="flex justify-between">
                                        <div class="w-full text-sm uppercase text-gray-700 font-semibold py-2 mb-2 border-b border-gray-200">{{ $key }}</div>
                                        {{-- <div class="form-check">
                                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" 
                                            type="checkbox" 
                                            value="{{ $field_of_interests[0]->extension_service_id }}"
                                            wire:model="selected_group.{{ $field_of_interests[0]->extension_service_id }}"
                                            >
                                        </div> --}}
                                    </div>
                                    @foreach($field_of_interests as $field_of_interest)
                                        <div class="flex justify-between border-b border-gray-100 py-2">
                                            <div class="text-gray-700 text-sm ">
                                                {{ $field_of_interest->name }}
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" 
                                                type="checkbox" 
                                                value="{{ $field_of_interest->id }}" 
                                                wire:model="selected_ids"
                                                >
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                            <div class="flex justify-end py-4 border-t border-gray-200">
                                <button class="px-4 py-2 uppercase tracking-wide text-gray-500 text-sm font-bold  rounded-lg border border-gray-500" 
                                    wire:click="backToPersonalInformation"
                                    >
                                    Back
                                </button>

                                <button class="ml-3 px-4 py-2 uppercase tracking-wide text-white text-sm font-bold  rounded-lg bg-blue-500" 
                                    wire:click="validateFieldOfInterest"
                                    wire:loading.attr="disabled" 
                                    >
                                    Next
                                </button>
                            </div>

                        </div>
                    </div>
                @elseif($section_page == 2)
                    {{-- personal information --}}
                    <div class="">
                        <div class="flex justify-between border-b border-gray-200 mb-3">
                            <div class="text-gray-700 font-bold text-lg mb-2">Account</div>
                            </div>
                            
                            {{--  --}}
                            <div class="card min-w-max">
                            <!---->
                                <div class="w-full card__media">
                                    <div class="h-36 w-full bg-gray-100 rounded-lg"></div>
                                    <div class="  card__media--aside "></div>
                                    <div class="flex items-center">
                                        <div class="relative flex flex-col items-center w-full">
                                            <label class="w-40 h-40 rounded-full relative flex flex-col items-center justify-center avatar  text-purple-600 min-w-max -top-28 bg-purple-200 text-purple-100 text-purple-650 ring-1 ring-white">
                                                <img class="h-40 w-40 object-cover rounded-full absolute inset-0" alt=""
                                                    @if($image) src="{{ $image->temporaryUrl() }}" @else src="{{ asset('storage/image/icons/none.jpg') }}" @endif
                                                    >
                                                <input type="file" accept="image/*" class="opacity-0 h-40 w-40 rounded-full"
                                                    wire:model="image" 
                                                    />
                                            </label>
                                            @error('image')
                                                <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                            @enderror
                                            <div class="-mt-24 w-full">
                                                {{-- username and email --}}
                                                <div class="grid grid-cols-2 gap-4 mb-3">
                                                    {{-- username --}}
                                                    <div class="col-span-full md:col-span-1">
                                                        <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                                            Username
                                                        </label> 
                                                        <input class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                            type="text" 
                                                            wire:model="username"
                                                        />
                                                        @error('username')
                                                            <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    {{-- first name --}}
                                                    <div class="col-span-full md:col-span-1">
                                                        <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                                            Email
                                                        </label> 
                                                        <input class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                            type="email" 
                                                            wire:model="email"
                                                        />
                                                        @error('email')
                                                            <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
            
                                                {{-- password --}}
                                                <div class="grid grid-cols-2 gap-4 mb-3">
                                                    {{-- password --}}
                                                    <div class="col-span-full md:col-span-1">
                                                        <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                                            Password
                                                        </label> 
                                                        <input class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                            type="password" 
                                                            wire:model="password"
                                                        />
                                                        @error('password')
                                                            <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    {{-- confirm password --}}
                                                    <div class="col-span-full md:col-span-1">
                                                        <label class="block text-xs uppercase font-semibold tracking-wide text-gray-700 mb-1">
                                                            Confirm Password
                                                        </label> 
                                                        <input class="block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                            type="password" 
                                                            wire:model="confirm_password"
                                                        />
                                                        @error('confirm_password')
                                                            <p class="text-red-500 text-xs italic my-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="flex justify-end py-4 border-t border-gray-200">
                                <button class="px-4 py-2 uppercase tracking-wide text-gray-500 text-sm font-bold  rounded-lg border border-gray-500" 
                                    wire:click="backToFieldOfInterest"
                                    >
                                    Back
                                </button>
                                <button class="ml-3 px-4 py-2 uppercase tracking-wide text-white text-sm font-bold  rounded-lg bg-blue-500" 
                                    wire:click="validateAccount"
                                    wire:loading.attr="disabled" 
                                    >
                                    Submit
                                </button>
                            </div>

                        </div>
                    </div>
                @endif
              {{--  --}}
            </div>