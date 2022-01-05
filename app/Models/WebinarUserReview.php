<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class WebinarUserReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'webinar_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
