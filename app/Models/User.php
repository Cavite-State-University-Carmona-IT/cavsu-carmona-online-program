<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;
use App\Models\Webinar;
use App\Models\WebinarUser;
use App\Models\FieldOfInterest;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function getFullNameLNfirst()
    {
        return $this->last_name . ", " .$this->first_name . " " . $this->middle_name[0];
    }

    public function getFullName()
    {
        return $this->first_name . " " . $this->middle_name[0] ." ". $this->last_name;
    }

    public function webinars()
    {
        return $this->belongsToMany(Webinar::class, 'webinar_users', 'user_id', 'webinar_id');
    }

    public function registeredWebinars()
    {
        return $this->hasMany(WebinarUser::class, 'user_id', 'id');
    }

    public function completedWebinars()
    {
        return $this->registeredWebinars()->where('date_completed','!=', null);
    }

    public function fieldOfInterests()
    {
        return $this->belongsToMany(FieldOfInterest::class, 'field_of_interest_users');
    }
}
