<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantCart extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}
