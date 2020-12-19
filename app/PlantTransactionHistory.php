<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantTransactionHistory extends Model
{
    public function transactionHistory()
    {
        return $this->belongsTo(TransactionHistory::class);
    }
}
