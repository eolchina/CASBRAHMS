<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specimen extends Model
{

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
