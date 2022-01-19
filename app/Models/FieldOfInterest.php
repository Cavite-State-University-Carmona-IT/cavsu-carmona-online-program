<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Webinar;
use App\Models\ExtensionService;
use App\Models\User;

class FieldOfInterest extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];

    public function link_name()
    {
        $data = strtolower(str_replace(" ", "-", $this->name));
        return $data;
    }

    public function webinars()
    {
        return $this->belongsToMany(Webinar::class);
    }

    public function extensionService()
    {
        return $this->belongsTo(ExtensionService::class, 'extension_service_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'field_of_interest_users');
    }
}
