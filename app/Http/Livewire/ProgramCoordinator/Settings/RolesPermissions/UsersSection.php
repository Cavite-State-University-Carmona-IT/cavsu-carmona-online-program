<?php

namespace App\Http\Livewire\ProgramCoordinator\Settings\RolesPermissions;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersSection extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.program-coordinator.settings.roles-permissions.users-section', ['users_with_roles' => $this->users_with_roles]);
    }

    public function getUsersWithRolesProperty()
    {
        $search = $this->search;
        return User::query()
        ->where(function ($query) use ($search) {
            return $query->where('last_name', 'like', '%'. $search .'%')
            ->orWhere('first_name', 'like', '%'. $search .'%');
        })
        ->whereHas('roles')
        ->paginate(5);
    }
}
