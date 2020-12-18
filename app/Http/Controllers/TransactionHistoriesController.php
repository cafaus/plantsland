<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionHistoriesController extends Controller
{
    public function index(){
        $transactionHistories = \App\TransactionHistory::all();
        $subTotal = [];
        
        foreach ($transactionHistories as $transactionHistory) {
            $total = 0;
            foreach ($transactionHistory->plantTransactionHistories as $plantTransactionHistory){
                $total += $plantTransactionHistory->totalPrice;
            }
            
            foreach ($transactionHistory->gardenerTransactionHistories as $gardenerTransactionHistory){
                $total += $gardenerTransactionHistory->totalPrice;
            }
            array_push($subTotal, $total);
        }
        
        return view('history', compact('transactionHistories','subTotal'));
    }
}
