<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GardenerCart extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gardener()
    {
        return $this->belongsTo(Gardener::class);
    }
}
