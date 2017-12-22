<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taxonomyterm extends Model
{

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
