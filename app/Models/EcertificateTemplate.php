<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Webinar;

class EcertificateTemplate extends Model
{
    use HasFactory;

    public function webinars()
    {
        return $this->belongsToMany(Webinar::class, 'ecertificate_template_webinars');
    }
}
