<?php

namespace App\Http\Livewire\ProgramCoordinator\Webinar;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\WebinarUser;
use Livewire\WithPagination;

class ManageRegisteredUser extends Component
{
    public $date, $status = 1, $date_completed, $ecertificate_link, $name;
    public $selected_data;

    public $status_filter;

    public function mount(Request $request) 
    {
        $this->webinar_id = $request->id;
    }

    public function render()
    {
        return view('livewire.program-coordinator.webinar.manage-registered-user', ['webinar_users' => $this->webinarUsers]);
    }

    public function getWebinarUsersProperty()
    {
        $status_filter = $this->status_filter;
        return WebinarUser::where('webinar_id', $this->webinar_id)
        ->where(function ($query) use ($status_filter){
            if($status_filter == 1) {
                return $query->whereNotNull('date_completed');
            } elseif($status_filter == 2) {
                return $query->whereNull('date_completed');
            }
        })
        ->paginate(5);
    }

    public function openEdit($val)
    {
        $this->status = "in-progress";

        $this->selected_data = WebinarUser::find($val);
        if($this->selected_data){
            $this->date = $this->selected_data->date;
            if($this->selected_data->date_completed){
                $this->status = "completed";
            }
            $this->date_completed = $this->selected_data->date_completed;
            $this->ecertificate_link = $this->selected_data->ecertificate_link;
            $this->name = $this->selected_data->user->first_name . " " . $this->selected_data->user->last_name;
            $this->dispatchBrowserEvent('open-modal-edit');
        }
        
    }

    public function submit()
    {
        $this->validate([
            'date_completed' => 'required_if:status,completed',
        ]);

        if($this->status == "in-progress") {
            $this->selected_data->date_completed = null;
        } else {
            $this->selected_data->date_completed = $this->date_completed;
        }
        $this->selected_data->ecertificate_link = $this->ecertificate_link;
        $this->selected_data->save();
        $this->name = "";
        $this->selected_data = "";
        $this->dispatchBrowserEvent('close-modal-edit');
    }

    // $this->dispatchBrowserEvent('close-modal-title');
}
