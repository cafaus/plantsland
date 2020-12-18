<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantsController extends Controller
{
    public function index(){
        $plants = \App\Plant::all();
        return view('storeList', compact('plants'));
    }

    public function show(\App\Plant $plant){
        return view('plantDetail', compact('plant'));
    }
}