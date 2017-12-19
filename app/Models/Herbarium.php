<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Herbarium extends Model
{
    protected $table = 'herbariums';
    protected $fillable = ['code', 'name', 'curator', 'email', 'description'];

    public function specimens()
    {
        return $this->hasMany(Specimen::class);
    }
}
