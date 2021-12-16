<?php

namespace App\Http\Controllers\Generate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
namespace App\Http\Livewire\Auth;
use App\Models\WebinarUser;

class EcertificateGenerate extends Controller
{
    public function index(Request $request)
    {
        if(!Auth::user()->hasRole('program_coordinator') || ($request->user_id != Auth::user()->id))
        {
            dd('No permission to access');
        }
        else {
            if($request->user_id == Auth::user()->id)
            {
                $webinar_user = WebinarUser::where('user_id', Auth::user()->id)->where('webinar_id', $request->webinar_id)->first();
                if($webinar_user)
                {
                    if($webinar_user->date_completed)
                    {
                        //  generate na
                    } else {
                        // di pa nya tapos yung webinar
                    }
                } else {
                    // di sya enrolled
                }
            } else {
                // iaaccess lng ni program coordinator
                // generate na
            }
        }
    }

    public function generate($webinar_id, $user_id)
    {

    }
}
