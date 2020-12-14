<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    public function plantCategory()
    {
        return $this->belongsTo(PlantCategory::class);
    }

    public function plantOrigin()
    {
        return $this->belongsTo(PlantOrigin::class);
    }

    public function plantCarts()
    {
        return $this->hasMany(PlantCart::class);
    }

    public function plantCares()
    {
        return $this->hasMany(PlantCare::class);
    }

}
