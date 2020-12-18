<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionHistoriesController extends Controller
{
    public function index(){
        $transactionHistories = \App\TransactionHistory::all();
        $subTotal = 0;
        foreach ($transactionHistories as $transactionHistory) {
            foreach ($transactionHistory->plantTransactionHistories as $plantTransactionHistory){
                $subTotal += $plantTransactionHistory->totalPrice;
            }
            
            foreach ($transactionHistory->gardenerTransactionHistories as $gardenerTransactionHistory){
                $subTotal += $gardenerTransactionHistory->totalPrice;
            }
        }
        
        return view('history', compact('transactionHistories', 'subTotal'));
    }
}
