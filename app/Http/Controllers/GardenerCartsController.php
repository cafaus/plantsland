<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GardenerCartsController extends Controller
{
    public function store(\App\Gardener $gardener){
        $data = request()->validate([
            'rentDays' => ['required', 'integer', 'min:1']
        ]);
        
        
        
        $existingCart = \App\GardenerCart::where('gardener_id', $gardener->id)->first();
        if($existingCart){
            $totalNeeded = $existingCart->rent_days + $data['rentDays'];
            $existingCart->rent_days += $data['rentDays'];
            $existingCart->save();
        }
        else{
            $newGardenerCart = new \App\GardenerCart();
            $newGardenerCart->user_id = Auth::id();
            $newGardenerCart->gardener_id = $gardener->id;
            $newGardenerCart->rent_days = $data['rentDays'];
            $newGardenerCart->save();
        }
       
        return redirect()->back()->with('success', 'Added to cart!');
    }
}
