<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TransactionHistoriesController extends Controller
{
    public function index(){
        $user = Auth::user();
        $transactionHistories = \App\TransactionHistory::where('user_id',$user->id)->get();
        $subTotal = [];
        
        if($transactionHistories){
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
        }
        
        return view('history', compact('transactionHistories','subTotal'));
    }
}
