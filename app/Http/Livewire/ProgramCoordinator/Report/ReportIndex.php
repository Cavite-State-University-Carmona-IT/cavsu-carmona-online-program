<?php

namespace App\Http\Livewire\ProgramCoordinator\Report;

use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\ExtensionService;
use App\Models\Webinar;
use App\Models\User;

use App\Exports\Reports\RegisteredUsersReportExport;
use App\Exports\Reports\WebinarsDetailsReportExport;
use App\Exports\Reports\UsersReportExport;

use Carbon\Carbon;

class ReportIndex extends Component
{
    public $op_value = 1, $extension_service_id = null, $webinars, $status;

    // users
    public $u_chk_specific_date, $u_date, $u_start_date, $u_end_date;

    // registered users
    public $ru_webinars;
    public $ru_date, $ru_start_date, $ru_end_date, $ru_extension_service_id, $ru_webinar_id = "", $ru_type = "1", $ru_chk_specific_date;

    // webinar details
    public $wd_chk_specific_date, $wd_date, $wd_start_date, $wd_end_date, $wd_extension_service_id;
    
    public function mount()
    {
        $this->ru_webinars = $this->RuWebinarsQuery;
    }

    public function option($val)
    {
        $this->op_value = $val;
    }

    public function getExtensionServicesProperty()
    {
        return ExtensionService::all();
    }

    // users 
    public function generateUsers()
    {
        $this->validate([
            'u_date' => 'required_if:u_chk_specific_date,true',
        ]);

        $specific_date = $this->u_chk_specific_date;
        $date = $this->u_date;
        $start_date = $this->u_start_date;
        $end_date = $this->u_end_date;

        $raw_users = User::query()
        ->where(function ($query) use ($specific_date, $date, $start_date, $end_date) {
            if($specific_date == true){
                return $query->whereDate('created_at' , $date);
            } else {
                if($start_date && $end_date){
                    return $query->whereDate('created_at', '>=', $start_date)
                    ->whereDate('created_at', '<=', $end_date);
                } elseif($start_date){
                    return $query->whereDate('created_at', '>=', $start_date);
                } elseif($end_date){
                    return $query->whereDate('created_at', '<=', $end_date);
                }
            }
        })
        ->get();

        if($raw_users->count() != 0) 
        {
           
            $data = array();
            $data = [
                'specific_date' => $specific_date,
                'date' => $date,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'users' => $raw_users,
            ];

            // dd($raw_users);
            $filename = Carbon::now()->format('Ymd_His_') . '_USERS_REPORT.xlsx';
            return Excel::download(new UsersReportExport($data), $filename);
        } 
        else {
            $this->status = "No data to generate";
            $this->dispatchBrowserEvent('close-modal-generate');
        }
    }


    // registered users
    public function updatedRuExtensionServiceId()
    {
        $this->ru_webinars = $this->RuwebinarsQuery;
        $this->ru_webinar_id = "";
    }

    public function getRuWebinarsQueryProperty()
    {
        return Webinar::where('extension_service_id', $this->ru_extension_service_id)->get();
    }

    public function generateRegisteredUsers()
    {
        $this->validate([
            'ru_date' => 'required_if:ru_chk_specific_date,true',
        ]);

        $extension_service_id = $this->ru_extension_service_id;
        $webinar_id = $this->ru_webinar_id;
        $type = $this->ru_type;

        $specific_date = $this->ru_chk_specific_date;
        $date = $this->ru_date;
        $start_date = $this->ru_start_date;
        $end_date = $this->ru_end_date;

        $webinars_per_extension = Webinar::query()
        ->where(function ($query) use ($webinar_id) {
            if($webinar_id != "") {
                return $query->where('webinars.id', $webinar_id);
            }
        })
        ->where(function ($query) use ($extension_service_id) {
            if($extension_service_id != "") {
                return $query->where('webinars.extension_service_id', $extension_service_id);
            }
        })
        ->leftjoin('extension_services', 'webinars.extension_service_id', '=', 'extension_services.id')
        ->join('webinar_users', function($join) use ($type, $start_date, $end_date, $date, $specific_date) {
            $join->on('webinars.id', '=', 'webinar_users.webinar_id')
            ->where(function ($query) use ($type) {
                if($type == 2){
                    return $query->where('webinar_users.date_completed' , '!=', null);
                } elseif($type == 3)
                {
                    return $query->where('webinar_users.date_completed' , null);
                }
            })
            ->where(function ($query) use ($specific_date, $date, $start_date, $end_date) {
                if($specific_date == true){
                    return $query->whereDate('webinar_users.created_at' , $date);
                } else {
                    if($start_date && $end_date){
                        return $query->whereDate('webinar_users.created_at', '>=', $start_date)
                        ->whereDate('webinar_users.created_at', '<=', $end_date);
                    } elseif($start_date){
                        return $query->whereDate('webinar_users.created_at', '>=', $start_date);
                    } elseif($end_date){
                        return $query->whereDate('webinar_users.created_at', '<=', $end_date);
                    }
                }
            });
        })
        ->join('users', 'webinar_users.user_id', '=', 'users.id')
        ->select(
            'extension_services.name as extension_service_name',
            // 'webinars.extension_service_id as extension_service_id',
            // 'webinars.id as webinar_id',
            'webinars.title as webinar_title', 
            'webinars.speaker', 
            'users.last_name as user_last_name',
            'users.first_name as user_first_name',
            'users.middle_name as user_middle_name',
            'users.email as user_email',
            'users.username as user_username',
            'webinar_users.date_completed as date_completed',
            'webinar_users.created_at as date_registered',
        )
        ->get()
        ->groupBy(['extension_service_name','webinar_title']);
        

        if($webinars_per_extension->count() != 0) 
        {
           
            $data = array();
            $data = [
                'specific_date' => $specific_date,
                'date' => $date,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'type' => $this->ru_type,
                'data' => $webinars_per_extension,
            ];

            // dd($data);
            $filename = Carbon::now()->format('Ymd_His_') . 'REGISTERED_USERS_REPORT.xlsx';
            return Excel::download(new RegisteredUsersReportExport($data), $filename);
        } 
        else {
            $this->status = "No data to generate";
            $this->dispatchBrowserEvent('close-modal-generate');
        }

        
    }

    // webinar details
    public function generateWebinarDetails()
    {
        $this->validate([
            'wd_date' => 'required_if:wd_chk_specific_date,true',
        ]);

        $extension_service_id = $this->wd_extension_service_id;

        $specific_date = $this->wd_chk_specific_date;
        $date = $this->wd_date;
        $start_date = $this->wd_start_date;
        $end_date = $this->wd_end_date;

        $webinars = Webinar::query()
        ->where(function ($query) use ($extension_service_id) {
            if($extension_service_id != "") {
                return $query->where('webinars.extension_service_id', $extension_service_id);
            }
        })
        ->leftjoin('extension_services', 'webinars.extension_service_id', '=', 'extension_services.id')
        ->where(function ($query) use ($specific_date, $date, $start_date, $end_date) {
            if($specific_date == true){
                return $query->whereDate('webinars.created_at' , $date);
            } else {
                if($start_date && $end_date){
                    return $query->whereDate('webinars.created_at', '>=', $start_date)
                    ->whereDate('webinars.created_at', '<=', $end_date);
                } elseif($start_date){
                    return $query->whereDate('webinars.created_at', '>=', $start_date);
                } elseif($end_date){
                    return $query->whereDate('webinars.created_at', '<=', $end_date);
                }
            }
        })
        ->select(
            'extension_services.name as extension_service_name',
            'webinars.*',
        )
        ->get()
        ->groupBy('extension_service_name');
        

        if($webinars->count() != 0) 
        {
           
            $data = array();
            $data = [
                'specific_date' => $specific_date,
                'date' => $date,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'data' => $webinars,
            ];

            // dd($webinars);
            $filename = Carbon::now()->format('Ymd_His_') . 'WEBINARS_DETAILS_REPORT.xlsx';
            return Excel::download(new WebinarsDetailsReportExport($data), $filename);
        } 
        else {
            $this->status = "No data to generate";
            $this->dispatchBrowserEvent('close-modal-generate');
        }

    }

    // render

    public function render()
    {
        return view('livewire.program-coordinator.report.report-index', ['extension_services'=>$this->extension_services])
        ->layout('layouts.app');
    }
}
