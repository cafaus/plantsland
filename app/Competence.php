<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    public function gardeners()
    {
        return $this->hasMany(Gardener::class);
    }
}
