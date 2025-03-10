<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;


class Model extends EloquentModel
{
    use HasFactory;
    public $timestamps = false;

    function maker()
    {
        return $this->belongsTo(Maker::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
