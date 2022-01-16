<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class WebinarUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'webinar_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
