<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
    protected $fillable = ['name', 'abbreviation', 'institute'];

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
