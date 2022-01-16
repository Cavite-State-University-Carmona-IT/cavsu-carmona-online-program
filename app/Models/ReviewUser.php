<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewUser extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'webinar_user_review_id',
        'user_id',
        'like',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
