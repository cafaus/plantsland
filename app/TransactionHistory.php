<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plantTransactionHistories(){
        return $this->hasMany(PlantTransactionHistory::class);
    }

    public function gardenerTransactionHistories(){
        return $this->hasMany(GardenerTransactionHistory::class);
    }
}
