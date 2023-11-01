<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(user::class);
    }

    public function cajas()
    {
        return $this->hasOne(caja::class);
    }

    public function details()
    {
        return $this->hasMany(detail::class);
    }
}
