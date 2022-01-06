<?php

namespace App\Http\Controllers\Generate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebinarUser;
use App\Models\Webinar;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PDF;
use Carbon\Carbon;
use App\Models\EcertificateTemplate;

class EcertificateGenerate extends Controller
{
    public function index(Request $request)
    {

        $webinar_user = WebinarUser::where('user_id', $request->user_id)->where('webinar_id', $request->webinar_id)->first();
        if($webinar_user)
        {
            if(!Auth::user()->hasRole('program_coordinator') || ($request->user_id != Auth::user()->id))
            {
                return abort(403, 'Unauthorized action.');
            }
            else {
                if($request->user_id == Auth::user()->id)
                {
                    if($webinar_user->date_completed)
                    {
                        //  generate na
                        $pdf = $this->generateCertificate($webinar_user);
                        if($pdf) {
                            return $pdf->download('ecertificate_'. Carbon::now()->format('His').'.pdf');
                        }
                    } else {
                        // di pa nya tapos yung webinar
                    }
                } else {
                    // iaaccess lng ni program coordinator
                    // generate na
                    // $this->generateCertificate($webinar_user);
                    $pdf = $this->generateCertificate($webinar_user);
                    if($pdf) {
                        return $pdf->download('ecertificate_'. Carbon::now()->format('His').'.pdf');
                    }
                }
            }
        } else {
            // not enrolled
        }

    }

    public function generateCertificate($webinar_user)
    {
        $userDetails = User::find($webinar_user->user_id);
        $webinarDetails = Webinar::find($webinar_user->webinar_id);
        $date = Carbon::parse($webinar_user->date)->format('F d, Y');

        $ecert_template = $webinarDetails->ecertificateTemplate();

        if($ecert_template)
        {
            $first_name = $userDetails->first_name;
            $middle_initial = $userDetails->middle_name ? $userDetails->middle_name[0] : '';
            $last_name = $userDetails->last_name;

            $title = $webinarDetails->title;
            $speaker = $webinarDetails->speaker;
            $name = $first_name . " " . $middle_initial . " " . $last_name;
            $date = Carbon::parse($webinar_user->date_completed)->format('F d, Y');

            $image = $ecert_template->image;
            $css_title = $ecert_template->css_title;
            $css_name = $ecert_template->css_name;
            $css_date = $ecert_template->css_date;

            $pdf = PDF::loadView('templateEcertificate.ecertificate-generate', [
                'title' => $title,
                'speaker' => $speaker,
                'name' => $name,
                'date' => $date,
                'css_title' => $css_title,
                'css_name' => $css_name,
                'css_date' => $css_date,
                'image' => $image,
            ])->setPaper('a4', 'landscape');

            return $pdf;
        } else {
            return null;
        }
    }
}
