<?php

namespace App\Http\Controllers\ProgramCoordinator\Ecertificate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;

use App\Models\EcertificateTemplate;

class TemplateController extends Controller
{
    public function view_format(Request $request)
    {
        $ecert_template = EcertificateTemplate::find($request->id);

        if($ecert_template)
        {
            $title = "Sample Title";
            $name = "John A. Doe";
            $date = "01/01/2020";

            $image = $ecert_template->image;
            $css_title = $ecert_template->css_title;
            $css_name = $ecert_template->css_name;
            $css_date = $ecert_template->css_date;

            $pdf = PDF::loadView('templateEcertificate.ecertificate-1', [
                'title' => $title,
                'name' => $name,
                'date' => $date,
                'css_title' => $css_title,
                'css_name' => $css_name,
                'css_date' => $css_date,
                'image' => $image,
            ])->setPaper('a4', 'landscape');

            // $pdf->save('assets/' . $fileName);
            return $pdf->download('sample_ecertificate_'. Carbon::now()->format('His').'.pdf');
        } else {
            
        }
    }
}
