<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GardenerPortofolio extends Model
{
    public function gardener()
    {
        return $this->belongsTo(Gardener::class);
    }
}
