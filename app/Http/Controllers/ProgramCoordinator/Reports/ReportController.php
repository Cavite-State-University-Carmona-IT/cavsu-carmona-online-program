<?php

namespace App\Http\Controllers\ProgramCoordinator\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExtensionService;
use App\Models\Webinar;
use App\Models\User;

class ReportController extends Controller
{
    public function index()
    {
        $extension_services = ExtensionService::all();
        return view('reports.ProgramCoordinator.report-index')->with('extension_services', $extension_services);
    }

    public function download_report_registeredUser_evaluation(Request $request)
    {
        dd($request->date);
    }

    public function download_report_userActivity_evaluation(Request $request)
    {
        dd($request->date);
    }

    public function download_completed_evaluation(Request $request)
    {
        $extension_service_id = $request->extension_service_id;
        $date = null;
        $start_date = null;
        $end_date = null;

        if($request->date == null) {
            $date = $request->date;
        } else {
            $start_date = $request->start_date;
            $end_date = $request->end_date;
        }

        $data = Webinar::query()
            ->leftjoin('extension_services', 'webinars.extension_service_id', '=', 'extension_services.id')
            ->join('webinar_users', function($join) {
                $join->on('webinars.id', '=', 'webinar_users.webinar_id')
                    ->where('webinar_users.date_completed', '!=', null);
            })
            ->leftjoin('users', 'webinar_users.user_id', '=', 'users.id')
            ->select(
                'extension_services.name as extension_service_name',
                'webinars.title as webinar_title',
                'webinar_users.date_completed as date_completed',
                'webinars.*',
                'users.*'
            )
            ->where(function($query) use ($extension_service_id) {
                if ($extension_service_id != 0) {
                    return $query->where('extension_service_id', $extension_service_id);
                }
            })
            ->where(function($query) use ($start_date, $end_date, $date) {
                if($date != null) {
                    return $query->whereDate('webinar_users.date_completed', $date);
                } else {
                    if ($start_date && $end_date) {
                        return $query->whereBetween('webinar_users.date_completed', [$start_date, $end_date]);
                    } elseif ($start_date) {
                        return $query->whereDate('webinar_users.date_completed', '>=', $start_date);
                    } elseif ($end_date) {
                        return $query->whereDate('webinar_users.date_completed', '<=', $end_date);
                    }
                }
            })
            ->get()
        ->groupBy(['extension_service_name', 'webinar_title']);

        return view('reports.ProgramCoordinator.report-completed-evaluation')->with('data', $data);

    }

}
