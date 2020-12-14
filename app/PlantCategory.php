<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantCategory extends Model
{
    public function plants()
    {
        return $this->hasMany(Plant::class);
    }
}
