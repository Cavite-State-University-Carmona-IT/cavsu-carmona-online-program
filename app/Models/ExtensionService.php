<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Department;

class ExtensionService extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function department()
    {
        return $this->belongsTo(Department::class)->first();
    }
}
