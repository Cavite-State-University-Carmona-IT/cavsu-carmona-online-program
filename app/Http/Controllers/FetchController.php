<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExtensionService;
use App\Models\Webinar;

class FetchController extends Controller
{
    public function getExtensionServices()
    {
        return ExtensionService::all();
    }

    public function getAllPublishedWebinars()
    {
        return Webinar::where('status', 1)->get();
    }

    public function getPublishedWebinarsFromExtensionServiceID($id)
    {
        if($id == 0) {
            $data = $this->getAllPublishedWebinars();
        } else {
            $data = Webinar::where('status', 1)->where('extension_service_id', $id)->get();
        }
        return $data;
    }
}
