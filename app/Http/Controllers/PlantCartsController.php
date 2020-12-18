<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlantCartsController extends Controller
{
    public function store($plantId){
        $data = request();
        $newPlantCart = new \App\CartPlant();

        $newPlantCart->user_id = Auth::id();
        $newPlantCart->plant_id = $plantId;
        $newPlantCart->quantity = $data['quantity'];
        $newPlantCart->save();
        return redirect()->back();
    }
}