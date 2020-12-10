<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantCatagory extends Model
{
    public function plants()
    {
        return $this->hasMany(Plant::class);
    }
}
