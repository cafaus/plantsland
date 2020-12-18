<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantsController extends Controller
{
    public function index(){
        $plants = \App\Plant::all();
        return view('storeList', compact('plants'));
    }
    public function welcome() {
        $plants = \App\Plant::all()->take(5);
        return view('welcome',compact('plants'));
    }
    public function show(\App\Plant $plant){
        $plants = \App\Plant::all()->take(8);
        return view('plantDetail', compact('plant', 'plants'));
    }
}
