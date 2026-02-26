<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItServices extends Model
{
    use HasFactory;

    public function packages()
    {
        return $this->hasMany(Package::class, 'service_id', 'id');
    }

    public function package_price()
    {
        return $this->hasMany(ItServiceProductPrice::class, 'it_service_id', 'id');
    }
}
