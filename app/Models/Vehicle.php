<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    public $timestamps = false;

    function body()
    {
        return $this->belongsTo(Body::class);
    }

    function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    function maker()
    {
        return $this->belongsTo(Maker::class);
    }

    function model()
    {
        return $this->belongsTo(Model::class);
    }
}
