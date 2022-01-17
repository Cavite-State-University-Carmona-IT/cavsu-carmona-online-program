<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="w-full pt-6 px-6 h-full rounded-lg bg-white  shadow-xl">
        <div class="flex justify-between">
            <p class="font-bold text-base tracking-wide text-gray-800 pt-2">User Permission</p>
            <select class="text-xs rounded-md ml-2 border-gray-200" wire:model="type">
                <option value="">All</option>
                <option value="1">Admin</option>
            </select>
        </div>
        <hr class="my-2">
        <input class="text-sm block appearance-none w-full bg-gray-100 text-gray-700 border border-gray-100 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            type="text" wire:model="search" placeholder="search...">
        <div class="w-full my-2">
            <table class="min-w-full leading-normal ">
                <thead>
                    <tr class="text-sm font-bold tracking-wide text-gray-700 border-b border-gray-100">
                        {{-- <p class="text-sm font-bold tracking-wide text-gray-800 line-clamp-2 mb-2">Basura Ko, Ayos Ko</p> --}}
                        <td class="py-2">
                            Last Name
                        </td>
                        <td class="py-2">
                            First Name
                        </td>
                        <td class="py-2">
                            Email
                        </td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr class="text-gray-700 text-sm border-b border-gray-100">
                            <td class="py-2">
                                {{ $user->last_name }}
                            </td>
                            <td class="py-2">
                                {{ $user->first_name }}
                            </td>
                            <td class="py-2">
                                {{ $user->email }}
                            </td>
                            <td>
                                <div class="form-check form-switch mb-7 mt-1">
                                    @livewire('program-coordinator.settings.permission-toggle', ['user' => $user], key($user->id))
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex flex-col xs:flex-row py-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
