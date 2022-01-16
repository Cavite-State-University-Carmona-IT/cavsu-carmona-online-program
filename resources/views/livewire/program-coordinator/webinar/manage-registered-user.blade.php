<div>
    {{-- Do your work, then step back. --}}
    <div class="flex flex-row mb-3 mt-2">
        <p class="text-sm font-bold tracking-wide text-gray-800 my-2 flex-auto">Registered <span class="text-gray-500">Users</span></p>
        <div class="flex flex-row-reverse flex-none">
            <select class="text-xs rounded-md ml-2" wire:model="status_filter">
                <option value="">All</option>
                <option value="1">Completed</option>
                <option value="2">In-Progress</option>
            </select>
        </div>
    </div>
    <table class="min-w-full leading-normal ">
        <thead >
            <tr >
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                    Last Name
                </th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                    First Name
                </th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                    M.I.
                </th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                    Email
                </th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($webinar_users as $webinar_user)
            <tr class="cursor-pointer" wire:click="openEdit({{ $webinar_user->id }})">
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $webinar_user->user->last_name }}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $webinar_user->user->first_name }}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $webinar_user->user->middle_name ? $webinar_user->user->middle_name[0] : '' }}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $webinar_user->user->email }}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $webinar_user->date_completed ? 'Completed' : 'In-Progress'}}</p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row ">
        {{ $webinar_users->links() }}
    </div>
    <div x-data="{ modalEdit: false }">
        <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center">
            <div class="border border-gray-200 rounded-lg shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 p-4 bg-white" 
                x-show="modalEdit"  
                @click.away="modalEdit = false"
                x-on:close-modal-edit.window="modalEdit = false"
                x-on:open-modal-edit.window="modalEdit = true" 
                wire:ignore.self
                >
                <div class="mt-3 text-center sm:mt-0 sm:text-left">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Update <span class="text-gray-500 text-xs">({{ $name }})</span>
                    </h3>

                    <hr class="my-4">

                    <div class="mb-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Date
                        </label> 
                        <input class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            readonly
                            type="date" wire:model="date"
                        />
                    </div>

                    <div class="mb-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Status
                        </label> 
                        <select class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            wire:model="status">
                            <option value="in-progress">In-Progress</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>

                    @if($status == "completed")
                        <div class="mb-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Date Completed
                            </label> 
                            <input class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model="date_completed"
                                type="date" 
                            />
                        </div>
                        @error('date_completed')
                            <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                        @enderror
                    @endif

                    <div class="mb-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            E-Certificate Link
                        </label> 
                        <input class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                             placeholder="https://"
                            type="text"  wire:model="ecertificate_link"
                        />
                    </div>

                    <div class="flex flex-row-reverse w-full mt-2">
                        <button class="px-4 py-2 uppercase tracking-wide text-white text-sm font-bold  rounded-lg bg-blue-500" 
                            wire:click="submit"
                            wire:loading.attr="disabled" 
                            >
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
