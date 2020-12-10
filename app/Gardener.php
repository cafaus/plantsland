<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gardener extends Model
{
    public function competence()
    {
        return $this->belongsTo(Competence::class);
    }

    public function gardenerPortofolios()
    {
        return $this->hasMany(GardenerPortofolio::class);
    }

    public function gardenerCarts()
    {
        return $this->hasMany(GardenerCart::class);
    }
}
