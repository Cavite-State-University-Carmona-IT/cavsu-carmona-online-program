<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FieldOfInterest extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function link_name()
    {
        $data = strtolower(str_replace(" ", "-", $this->name));
        return $data;
    }
}
