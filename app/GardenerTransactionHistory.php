<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GardenerTransactionHistory extends Model
{
    public function transactionHistory()
    {
        return $this->belongsTo(TransactionHistory::class);
    }
}
