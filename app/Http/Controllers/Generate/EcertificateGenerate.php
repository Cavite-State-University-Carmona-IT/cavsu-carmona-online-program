<?php

namespace App\Http\Controllers\Generate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebinarUser;
use App\Models\Webinar;
use App\Models\User;
use App\Models\EcertificateProperty;
use Illuminate\Support\Facades\Auth;
use PDF;
use Carbon\Carbon;

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
                        return $pdf->download('ecertificate_'. Carbon::now()->format('His').'.pdf');
                    } else {
                        // di pa nya tapos yung webinar
                    }
                } else {
                    // iaaccess lng ni program coordinator
                    // generate na
                    // $this->generateCertificate($webinar_user);
                    $pdf = $this->generateCertificate($webinar_user);
                    return $pdf->download('ecertificate_'. Carbon::now()->format('His').'.pdf');
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

        if($webinarDetails->ecertificate_property_id){
            $properties = EcertificateProperty::find($webinarDetails->ecertificate_property_id);
        } else {
            $properties = EcertificateProperty::find(1);
        }

        if($userDetails->middle_name)
        {
            $user_name = $userDetails->first_name . ' ' .  $userDetails->middle_name[0] . '. ' . $userDetails->last_name;
        } else {
            $user_name = $userDetails->first_name . ' ' . $userDetails->last_name;
        }

        $pdf = PDF::loadView('templateEcertificate.ecertificate-1', [
            'name' => $user_name,
            'date' => $date,
            'properties' => $properties,
        ])->setPaper('a4', 'landscape');

        // $pdf->save('assets/' . $fileName);

        return $pdf;
    }
}
