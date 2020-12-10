<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantOrigin extends Model
{
    public function plant()
    {
        return $this->hasOne(Plant::class);
    }
}
