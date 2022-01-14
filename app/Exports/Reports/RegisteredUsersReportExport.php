<?php

namespace App\Exports\Reports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RegisteredUsersReportExport implements FromView
{
    public function __construct($data) {
        $this->data = $data;
    }
    
    public function view(): View
    {
        //dd($this->data);   
        return view('reports.registered-user',$this->data);
    }
}
