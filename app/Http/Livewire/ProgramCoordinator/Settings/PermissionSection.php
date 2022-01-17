<?php

namespace App\Http\Livewire\ProgramCoordinator\Settings;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class PermissionSection extends Component
{
    public $search, $type;

    public function render()
    {
        return view('livewire.program-coordinator.settings.permission-section', ['users' => $this->users]);
    }

    public function getUsersProperty()
    {
        $search = $this->search;
        $type = $this->type;

        return User::query()
            ->where(function ($query) use ($search) {
                return $query->where('last_name', 'like', '%'. $search .'%')
                ->orWhere('first_name', 'like', '%'. $search .'%')
                ->orWhere('email', 'like', '%'. $search .'%');
            })
            ->where(function ($query) use ($type){
                if($type == 1) {
                    return $query->whereHas('roles', function($query){
                            $query->where('name', 'program_coordinator');
                        });
                } 
            })
            ->paginate(5);
    }
}
