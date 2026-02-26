<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package_Keypoint extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function packageValues()
    {
        return $this->hasMany(Package_Keypoint_value::class, 'package_keypoint_id', 'id');
    }
}
