<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\ExtensionService;
use App\Models\WebinarUserReview;
use App\Models\WebinarUser;

class Webinar extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function extensionService()
    {
        return $this->belongsTo(ExtensionService::class)->first();
    }

    public function enrolled()
    {
        return $this->hasMany(WebinarUser::class, 'webinar_id', 'id');
    }

    public function completed()
    {
        return $this->enrolled()->where('date_completed','!=', null);
    }

    public function review()
    {
        return $this->hasMany(WebinarUserReview::class, 'webinar_id', 'id');
    }

    public function link_name()
    {
        $data = strtolower(str_replace(" ","-", $this->title));
        return $data;
    }

    public function status_name()
    {
        switch($this->status){
            case 1:
                $value = "pending";
                break;
            case 2:
                $value = "published";
                break;
            case 3:
                $value = "deleted";
                break;
            default:
                $value = "unknown";
        }
        return $value;
    }

    public function status_color()
    {
        switch($this->status){
            case 1:
                $value = "blue";
                break;
            case 2:
                $value = "green";
                break;
            case 3:
                $value = "red";
                break;
            default:
                $value = "gray";
        }
        return $value;
    }
}
