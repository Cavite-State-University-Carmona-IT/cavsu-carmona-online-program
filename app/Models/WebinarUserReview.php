<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ReviewUser;

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

    public function likes()
    {
        return $this->hasMany(ReviewUser::class)->where('like', true);
    }

    public function dislikes()
    {
        return $this->hasMany(ReviewUser::class)->where('like', false);
    }

    public function bool_like($user_id)
    {
        return $this->hasMany(ReviewUser::class)->where('user_id', $user_id)->first();
    }
}
