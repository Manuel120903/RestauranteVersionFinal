<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;

    public function tables()
    {
        return $this->belongsTo(table::class);
    }

    public function orders()
    {
        return $this->belongsTo(order::class);
    }

    public function foods()
    {
        return $this->belongsTo(food::class);
    }
}
