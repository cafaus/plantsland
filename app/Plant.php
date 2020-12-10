<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    public function plantCatagory()
    {
        return $this->belongsTo(PlantCatagory::class);
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
