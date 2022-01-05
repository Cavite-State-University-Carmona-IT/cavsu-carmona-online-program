<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcertificateTemplateWebinar extends Model
{
    use HasFactory;

    protected $fillable = [
        'webinar_id',
        'ecertificate_template_id',
    ];
}
