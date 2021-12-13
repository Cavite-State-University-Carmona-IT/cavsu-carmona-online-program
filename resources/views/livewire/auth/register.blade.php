<div>
  <form wire:submit.prevent='register'>
    <div class="flex w-full px-40 mb-6 pt-14">
        <div class="w-1/3">
            <div class="w-full px-9 pt-9">
                <div class="mb-2 text-lg font-bold text-gray-500">Registration Form</div>
                <div class="text-xs text-gray-400">Create Account</div>
            </div>
            <hr class="m-6 ">
            <div class="flex pl-10">
                <div class="grid w-1 h-full grid-rows-3 bg-gray-200">
                    @if($current_step == 1)
                      <div class="w-1 my-5 bg-green-300 h-9">

                      </div>
                      <div class="w-1 my-5 h-9">

                      </div>
                      <div class="w-1 my-5 h-9">

                      </div>
                    @endif
                    @if($current_step == 2)
                      <div class="w-1 my-5 h-9">

                      </div>
                      <div class="w-1 my-5 bg-green-300 h-9">

                      </div>
                      <div class="w-1 my-5 h-9">

                      </div>
                    @endif
                    @if($current_step == 3)
                      <div class="w-1 my-5 h-9">

                      </div>
                      <div class="w-1 my-5 h-9">

                      </div>
                      <div class="w-1 my-5 bg-green-300 h-9">

                      </div>
                    @endif
                </div>
                <div class="grid grid-rows-3 font-light text-gray-400 w-60">
                    @if($current_step == 1)
                      <h1 class="h-10 my-4 font-bold text-left text-gray-500 mx-7">Personal Information</h1>
                      <h1 class="h-10 my-4 text-left mx-7">
                          Job Information
                      </h1>
                      <h1 class="h-10 my-4 text-left mx-7">
                          Account
                      </h1>
                    @endif
                    @if($current_step == 2)
                      <h1 class="h-10 my-4 text-left mx-7">
                          Personal Information
                      </h1>
                      <h1 class="h-10 my-4 font-bold text-left text-gray-500 mx-7">
                          Job Information
                      </h1>
                      <h1 class="h-10 my-4 text-left mx-7">
                          Account
                      </h1>
                    @endif
                    @if($current_step == 3)
                      <h1 class="h-10 my-4 text-left mx-7">
                          Personal Information
                      </h1>
                      <h1 class="h-10 my-4 text-left mx-7">
                          Job Information
                      </h1>
                      <h1 class="h-10 my-4 font-bold text-left text-gray-500 mx-7">
                          Account
                      </h1>
                    @endif
                </div>
            </div>
        </div>
        <div class="w-full p-5">
            <div class="w-full h-full p-12 pb-20 bg-white shadow-sm rounded-xl px-14">

                @if($current_step == 1)
                  {{-- Personal Information --}}
                  <div class="w-full h-full">
                      <div class="font-bold text-left text-gray-500">Personal Information</div>
                      <hr class="my-4">
                      <div class="text-gray-600">

                          {{-- Full Name --}}
                          <div class="grid grid-cols-3 gap-2 mb-3">
                              <div class="w-full mx-3 mb-5">
                                  <label class="block text-sm font-medium">First Name</label>
                                  <input type="text" placeholder="First name" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="first_name" wire:model="first_name"/>
                                  <small class="font-bold text-red-500">@error('first_name'){{$message}}@enderror</small>
                              </div>
                              <div class="w-full mx-3 mb-5">
                                  <label class="block text-sm font-medium">Middle Name</label>
                                  <input type="text" placeholder="Middle name (Optional)" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="middle_name" wire:model="middle_name"/>
                              </div>
                              <div class="w-full mx-3 mb-5">
                                  <label class="block text-sm font-medium">Last Name</label>
                                  <input type="text" placeholder="Last name" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="last_name" wire:model="last_name"/>
                                  <small class="font-bold text-red-500">@error('last_name'){{$message}}@enderror</small>
                              </div>
                          </div>
                          <div class="w-full mx-3 mb-4 ">
                              <label class="block text-sm font-medium">Address</label>
                              <input type="text" placeholder="Address (Optional)" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="address" wire:model="address"/>
                          </div>
                          <div class="grid grid-cols-2 mb-3">
                            <div class="flex mb-5">
                                <div class="w-full mx-3">
                                    <label class="block text-sm font-medium">Gender</label>
                                    <select class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="gender" name="gender" wire:model="gender">
                                      <option value="" selected>--Select Gender--</option>
                                      <option value="0">Male</option>
                                      <option value="1">Female</option>
                                    </select>
                                    <small class="font-bold text-red-500">@error('gender'){{$message}}@enderror</small>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-full mx-3 mb-5">
                                    <label class="block text-sm font-medium">Birth Date</label>
                                    <input type="date" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="birth_date" wire:model="birth_date"/>
                                    <small class="font-bold text-red-500">@error('birth_date'){{$message}}@enderror</small>
                                </div>
                            </div>
                          </div>
                          <div class="grid grid-cols-2">
                            <div class="flex mb-4">
                                <div class="w-full mx-3 mb-5">
                                    <label class="block text-sm font-medium">Marital Status</label>
                                    <select class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="status" name="status" wire:model="status">
                                      <option value="" selected>--Select Status--</option>
                                      <option value="1">Single</option>
                                      <option value="2">Married</option>
                                    </select>
                                    <small class="font-bold text-red-500">@error('status'){{$message}}@enderror</small>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-full mx-3 mb-5">
                                    <label class="block text-sm font-medium">Highest Educational Attainment</label>
                                    <select class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="highest_educational_attainment" name="highest_educational_attainment" wire:model="highest_educational_attainment">
                                      <option value="" selected>--Select Highest Educational Attainment--</option>
                                      <option value="1">Highschool</option>
                                      <option value="2">Bachelor</option>
                                    </select>
                                    <small class="font-bold text-red-500">@error('highest_educational_attainment'){{$message}}@enderror</small>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                @endif

                @if($current_step == 2)
                  {{-- Job Information --}}
                  <div class="w-full h-full">
                      <div class="font-bold text-left text-gray-500">Job Information</div>
                      <hr class="my-4">
                      <div class="text-gray-600">
                          <div class="grid grid-cols-2 gap-3">
                              <div class="w-full mx-3">
                                  <label class="block text-sm font-medium">Employment Status</label>
                                  <select class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="employment_status" name="employment_status" wire:model="employment_status">
                                    <option value="" selected>--Select Employment Status--</option>
                                    <option value="0">Employed</option>
                                    <option value="1">Student</option>
                                  </select>
                                  <small class="font-bold text-red-500">@error('employment_status'){{$message}}@enderror</small>
                              </div>
                              <div class="w-full mx-3">
                                  <label class="block text-sm font-medium">Income</label>
                                  <input type="number" name="income" placeholder="Income (Optional)" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" wire:model="income"/>
                              </div>
                          </div>
                      </div>
                  </div>
                @endif

                @if($current_step == 3)
                  {{-- Account --}}
                  <div class="w-full h-full">
                      <div class="font-bold text-left text-gray-500">Account</div>
                      <hr class="my-4">
                      <div class="mb-2 text-gray-600">
                          <div>
                            <div class="w-full mb-5">
                                <label class="block text-sm font-medium">Username</label>
                                <input type="text" name="username" placeholder="username" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" wire:model="username"/>
                                <small class="font-bold text-red-500">@error('username'){{$message}}@enderror</small>
                            </div>
                            <div class="w-full mb-5">
                                <label class="block text-sm font-medium">Email</label>
                                <input type="email" name="email" placeholder="email" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" wire:model="email"/>
                                <small class="font-bold text-red-500">@error('email'){{$message}}@enderror</small>
                            </div>
                            <div class="w-full mb-5">
                                <label class="block text-sm font-medium">Password</label>
                                <input type="password" name="password" placeholder="password" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" wire:model="password"/>
                                <small class="font-bold text-red-500">@error('password'){{$message}}@enderror</small>
                            </div>
                            <div class="w-full">
                                <label class="block text-sm font-medium">Confirm Password</label>
                                <input type="password" name="password_confirmation" placeholder="confirm password" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" wire:model="password_confirmation"/>
                                <small class="font-bold text-red-500">@error('password_confirmation'){{$message}}@enderror</small>
                            </div>
                          </div>
                      </div>
                  </div>
                @endif
                {{-- buttons --}}
                <div class="">
                    @if($current_step == 3)
                      <div class="w-full mx-3">
                          <button type="submit" class="float-right px-4 py-2 ml-3 text-sm font-medium text-gray-700 transition bg-yellow-400 border-0 rounded-md focus:outline-none focus:ring hover:bg-yellow-800 hover:text-white active:bg-gray-700 focus:ring-gray-300">Submit</button>
                      </div>
                    @endif

                    @if($current_step < 3)
                      <div class="w-full mx-3">
                          <button type="button" wire:click="next()" class="float-right px-6 py-2 ml-3 text-sm font-medium text-white transition bg-gray-500 border-0 rounded-md focus:outline-none focus:ring hover:bg-gray-700 hover:text-gray-300 active:bg-gray-700 focus:ring-gray-300">Next</button>
                      </div>
                    @endif

                    @if($current_step > 1)
                      <div class="w-full mx-3">
                          <button type="button" wire:click="back()" class="float-right px-6 py-2 text-sm font-medium text-white transition bg-red-500 border-0 rounded-md focus:outline-none focus:ring hover:bg-gray-700 hover:text-gray-300 active:bg-gray-700 focus:ring-gray-300">Back</button>
                      </div>
                    @endif
                </div>
                @if($current_step == 3)
                  <div class="text-sm font-semibold text-gray-800">
                    <label class="inline-flex items-center">
                      <input class="mr-2 text-gray-400 border border-gray-700 rounded focus:ring-opacity-25" type="checkbox" wire:model="confirm" />
                      Confirm all inputs are correct
                    </label><br>
                    <small class="font-bold text-red-500">@error('confirm'){{$message}}@enderror</small>
                  </div>
                @endif
            </div>
        </div>
    </div>
  </form>
</div>
