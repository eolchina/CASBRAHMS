<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{

    public function specimens()
    {
        return $this->hasMany(Specimen::class);
    }

    public function collector()
    {
        return $this->belongsTo(Collector::class);
    }
}
