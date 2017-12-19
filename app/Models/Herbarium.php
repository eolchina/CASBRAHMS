<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Herbarium extends Model
{

    public function specimens()
    {
        return $this->hasMany(Specimen::class);
    }
}
