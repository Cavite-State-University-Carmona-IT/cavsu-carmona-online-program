<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\ExtensionService;
use App\Models\WebinarUserReview;
use App\Models\WebinarUser;
use App\Models\User;
use App\Models\FieldOfInterest;
use App\Models\EcertificateTemplate;

class Webinar extends Model
{
    const UPDATED_AT = null;
    //to turn off timestamp completely
    public $timestamps = false;

    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'speaker',
        'about',
        'date',
        'status',
        'duration',
        'price',
        'image',
        'is_ecert_default',
        'ecertificate_link',
    ];

    public function fieldOfInterests()
    {
        return $this->belongsToMany(FieldOfInterest::class, 'webinar_field_of_interests');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id')->first();
    }

    public function extensionService()
    {
        return $this->belongsTo(ExtensionService::class)->first();
    }

    public function enrolled()
    {
        return $this->hasMany(WebinarUser::class, 'webinar_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'webinar_users');
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

    public function ratings()
    {
        return $this->review->count() == 0 ? 0 : ($this->review->sum('rate')) / $this->review->count();
    }

    public function ecertificateTemplates()
    {
        return $this->belongsToMany(EcertificateTemplate::class, 'ecertificate_template_webinars');
    }

    public function ecertificateTemplate()
    {
        return $this->belongsToMany(EcertificateTemplate::class, 'ecertificate_template_webinars')->first();
    }

}
