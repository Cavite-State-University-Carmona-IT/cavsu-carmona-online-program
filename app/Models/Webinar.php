<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\ExtensionService;
use App\Models\WebinarUserReview;
use App\Models\WebinarUser;

class Webinar extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function extensionService()
    {
        return $this->belongsTo(ExtensionService::class)->first();
    }

    public function enrolled()
    {
        return $this->hasMany(WebinarUser::class, 'webinar_id', 'id');
    }

    public function completed()
    {
        return $this->enrolled()->where('date_completed','!=', null);
    }

    public function review()
    {
        return $this->hasMany(WebinarUserReview::class, 'webinar_id', 'id');
    }

    public function link()
    {
        $lowercaseStr = strtolower($this->title);
        $hyphenatedStr = str_replace(" ", "-", $lowercaseStr);
        return $hyphenatedStr;
    }
}
