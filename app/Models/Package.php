<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function packageKeypoints()
    {
        return $this->hasMany(Package_Keypoint::class, 'service_id', 'service_id');
    }
}
