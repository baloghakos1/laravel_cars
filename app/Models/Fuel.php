<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
