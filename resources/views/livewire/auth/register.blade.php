<div>
  <form wire:submit.prevent='register'>
    <div class="flex w-full px-40 mb-6 ">
        <div class="w-1/3">
            <div class="w-full px-9 pt-9">
                <div class="text-gray-500 font-bold text-lg mb-2">Registration Form</div>
                <div class="text-gray-400 text-xs">Create Account</div>
            </div>
            <hr class=" m-6">
            <div class="flex pl-10">
                <div class="grid grid-rows-3 bg-gray-200 h-full w-1">
                    @if($current_step == 1)
                      <div class="w-1 h-9 my-5 bg-green-300">

                      </div>
                      <div class="w-1 h-9  my-5">

                      </div>
                      <div class="w-1 h-9  my-5">

                      </div>
                    @endif
                    @if($current_step == 2)
                      <div class="w-1 h-9 my-5">

                      </div>
                      <div class="w-1 h-9  my-5 bg-green-300">

                      </div>
                      <div class="w-1 h-9  my-5">

                      </div>
                    @endif
                    @if($current_step == 3)
                      <div class="w-1 h-9 my-5">

                      </div>
                      <div class="w-1 h-9  my-5">

                      </div>
                      <div class="w-1 h-9  my-5 bg-green-300">

                      </div>
                    @endif
                </div>
                <div class="grid grid-rows-3 w-60 text-gray-400 font-light">
                    @if($current_step == 1)
                      <h1 class="h-10 my-4 mx-7 text-left text-gray-500 font-bold">Personal Information</h1>
                      <h1 class="h-10 my-4 mx-7 text-left">
                          Job Information
                      </h1>
                      <h1 class="h-10 my-4 mx-7 text-left">
                          Account
                      </h1>
                    @endif
                    @if($current_step == 2)
                      <h1 class="h-10 my-4 mx-7 text-left">
                          Personal Information
                      </h1>
                      <h1 class="h-10 my-4 mx-7 text-left text-gray-500 font-bold">
                          Job Information
                      </h1>
                      <h1 class="h-10 my-4 mx-7 text-left">
                          Account
                      </h1>
                    @endif
                    @if($current_step == 3)
                      <h1 class="h-10 my-4 mx-7 text-left">
                          Personal Information
                      </h1>
                      <h1 class="h-10 my-4 mx-7 text-left">
                          Job Information
                      </h1>
                      <h1 class="h-10 my-4 mx-7 text-left text-gray-500 font-bold">
                          Account
                      </h1>
                    @endif
                </div>
            </div>
        </div>
        <div class="w-full p-5">
            <div class="h-full bg-white w-full shadow-sm rounded-xl p-12 px-14 pb-20">

                @if($current_step == 1)
                  {{-- Personal Information --}}
                  <div class="w-full h-full">
                      <div class="text-gray-500 text-left font-bold">Personal Information</div>
                      <hr class="my-4">
                      <div class="text-gray-600">

                          {{-- Full Name --}}
                          <div class="grid grid-cols-3 gap-2 mb-3">
                              <div class="mb-5 w-full mx-3">
                                  <label class="block text-sm font-medium">First Name</label>
                                  <input type="text" placeholder="First name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="first_name" wire:model="first_name"/>
                                  <small class="text-red-500 font-bold">@error('first_name'){{$message}}@enderror</small>
                              </div>
                              <div class="mb-5 w-full mx-3">
                                  <label class="block text-sm font-medium">Middle Name</label>
                                  <input type="text" placeholder="Middle name (Optional)" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="middle_name" wire:model="middle_name"/>
                              </div>
                              <div class="mb-5 w-full mx-3">
                                  <label class="block text-sm font-medium">Last Name</label>
                                  <input type="text" placeholder="Last name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="last_name" wire:model="last_name"/>
                                  <small class="text-red-500 font-bold">@error('last_name'){{$message}}@enderror</small>
                              </div>
                          </div>
                          <div class="mb-7 w-full mx-3 mb-4">
                              <label class="block text-sm font-medium">Address</label>
                              <input type="text" placeholder="Address (Optional)" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="address" wire:model="address"/>
                          </div>
                          <div class="grid grid-cols-2 mb-3">
                            <div class="flex mb-5">
                                <div class="mx-3 w-full">
                                    <label class="block text-sm font-medium">Gender</label>
                                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="gender" name="gender" wire:model="gender">
                                      <option value="" selected>--Select Gender--</option>
                                      <option value="0">Male</option>
                                      <option value="1">Female</option>
                                    </select>
                                    <small class="text-red-500 font-bold">@error('gender'){{$message}}@enderror</small>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="mx-3 mb-5 w-full">
                                    <label class="block text-sm font-medium">Birth Date</label>
                                    <input type="date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="birth_date" wire:model="birth_date"/>
                                    <small class="text-red-500 font-bold">@error('birth_date'){{$message}}@enderror</small>
                                </div>
                            </div>
                          </div>
                          <div class="grid grid-cols-2">
                            <div class="flex mb-4">
                                <div class="mx-3 mb-5 w-full">
                                    <label class="block text-sm font-medium">Marital Status</label>
                                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="status" name="status" wire:model="status">
                                      <option value="" selected>--Select Status--</option>
                                      <option value="1">Single</option>
                                      <option value="2">Married</option>
                                    </select>
                                    <small class="text-red-500 font-bold">@error('status'){{$message}}@enderror</small>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="mx-3 mb-5 w-full">
                                    <label class="block text-sm font-medium">Highest Educational Attainment</label>
                                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="highest_educational_attainment" name="highest_educational_attainment" wire:model="highest_educational_attainment">
                                      <option value="" selected>--Select Highest Educational Attainment--</option>
                                      <option value="1">Highschool</option>
                                      <option value="2">Bachelor</option>
                                    </select>
                                    <small class="text-red-500 font-bold">@error('highest_educational_attainment'){{$message}}@enderror</small>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                @endif

                @if($current_step == 2)
                  {{-- Job Information --}}
                  <div class="w-full h-full">
                      <div class="text-gray-500 text-left font-bold">Job Information</div>
                      <hr class="my-4">
                      <div class="text-gray-600">
                          <div class="grid grid-cols-2 gap-3">
                              <div class="mx-3 w-full">
                                  <label class="block text-sm font-medium">Employment Status</label>
                                  <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" name="employment_status" name="employment_status" wire:model="employment_status">
                                    <option value="" selected>--Select Employment Status--</option>
                                    <option value="0">Employed</option>
                                    <option value="1">Student</option>
                                  </select>
                                  <small class="text-red-500 font-bold">@error('employment_status'){{$message}}@enderror</small>
                              </div>
                              <div class="w-full mx-3">
                                  <label class="block text-sm font-medium">Income</label>
                                  <input type="number" name="income" placeholder="Income (Optional)" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" wire:model="income"/>
                              </div>
                          </div>
                      </div>
                  </div>
                @endif

                @if($current_step == 3)
                  {{-- Account --}}
                  <div class="w-full h-full">
                      <div class="text-gray-500 text-left font-bold">Account</div>
                      <hr class="my-4">
                      <div class="text-gray-600 mb-2">
                          <div>
                            <div class="w-full mb-5">
                                <label class="block text-sm font-medium">Username</label>
                                <input type="text" name="username" placeholder="username" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" wire:model="username"/>
                                <small class="text-red-500 font-bold">@error('username'){{$message}}@enderror</small>
                            </div>
                            <div class="w-full mb-5">
                                <label class="block text-sm font-medium">Email</label>
                                <input type="email" name="email" placeholder="email" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" wire:model="email"/>
                                <small class="text-red-500 font-bold">@error('email'){{$message}}@enderror</small>
                            </div>
                            <div class="w-full mb-5">
                                <label class="block text-sm font-medium">Password</label>
                                <input type="password" name="password" placeholder="password" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" wire:model="password"/>
                                <small class="text-red-500 font-bold">@error('password'){{$message}}@enderror</small>
                            </div>
                            <div class="w-full">
                                <label class="block text-sm font-medium">Confirm Password</label>
                                <input type="password" name="password_confirmation" placeholder="confirm password" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" wire:model="password_confirmation"/>
                                <small class="text-red-500 font-bold">@error('password_confirmation'){{$message}}@enderror</small>
                            </div>
                          </div>
                      </div>
                  </div>
                @endif
                {{-- buttons --}}
                <div class="">
                    @if($current_step == 3)
                      <div class="mx-3 w-full">
                          <button type="submit" class="float-right ml-3 px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-gray-700 bg-yellow-400 hover:bg-yellow-800 hover:text-white active:bg-gray-700 focus:ring-gray-300">Submit</button>
                      </div>
                    @endif

                    @if($current_step < 3)
                      <div class="mx-3 w-full">
                          <button type="button" wire:click="next()" class="float-right ml-3 px-6 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-gray-500 hover:bg-gray-700 hover:text-gray-300 active:bg-gray-700 focus:ring-gray-300">Next</button>
                      </div>
                    @endif

                    @if($current_step > 1)
                      <div class="mx-3 w-full">
                          <button type="button" wire:click="back()" class="float-right px-6 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-red-500 hover:bg-gray-700 hover:text-gray-300 active:bg-gray-700 focus:ring-gray-300">Back</button>
                      </div>
                    @endif
                </div>
                @if($current_step == 3)
                  <div class="text-gray-800 text-sm font-semibold">
                    <label class="inline-flex items-center">
                      <input class="text-gray-400 mr-2 focus:ring-opacity-25 border border-gray-700 rounded" type="checkbox" wire:model="confirm" />
                      Confirm all inputs are correct
                    </label><br>
                    <small class="text-red-500 font-bold">@error('confirm'){{$message}}@enderror</small>
                  </div>
                @endif
            </div>
        </div>
    </div>
  </form>
</div>
