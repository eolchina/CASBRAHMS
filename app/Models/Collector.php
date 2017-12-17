<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
