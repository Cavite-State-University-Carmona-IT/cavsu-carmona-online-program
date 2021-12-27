<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FieldOfInterest;
use App\Models\Webinar;

class WebinarFieldOfInterest extends Model
{
    use HasFactory;

    protected $fillable = ['webinar_id', 'field_of_interest_id'];
}
