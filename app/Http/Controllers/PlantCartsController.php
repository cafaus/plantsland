<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlantCartsController extends Controller
{
    public function index(){
        $plantCarts = \App\PlantCart::all();
        
        return view('cart',compact('plantCarts'));
    }
    public function store(\App\Plant $plant){
        $data = request()->validate([
            'quantity' => ['required', 'integer', 'min:1']
        ]);
        
        if($plant->stock < $data['quantity']){
            return redirect()->back()->with('alert', 'Stock is not enough!! (must be below {$plant->stock})');
        }
        
        $existingCart = \App\PlantCart::where('plant_id', $plant->id)->first();
        if($existingCart){
            $totalNeeded = $existingCart->quantity + $data['quantity'];
            
            if($plant->stock < $totalNeeded){
                $errmsg = "Stock is not enough!!. because you already add {$existingCart->quantity} stock to the cart (must be below {$plant->stock})";
                return redirect()->back()->with('alert', $errmsg);
            }
            $existingCart->quantity += $data['quantity'];
            $existingCart->save();
        }
        else{
            $newPlantCart = new \App\PlantCart();
            $newPlantCart->user_id = Auth::id();
            $newPlantCart->plant_id = $plant->id;
            $newPlantCart->quantity = $data['quantity'];
            $newPlantCart->save();
        }
       
        return redirect()->back()->with('success', 'Added to cart!');
    }
}