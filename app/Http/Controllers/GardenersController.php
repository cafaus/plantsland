<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Gardener;
class GardenersController extends Controller
{
    public function index( Request $req ){
        $params = $req->query();
        $gardeners = [];
        if ( $req->has('name') ) {
            $gardeners = Gardener::where('name', 'like' , '%' . $params['name'] . '%')->get();
        } else {
            $gardeners = Gardener::all();
        }
        return view('gardenerList', compact('gardeners'));
    }

    public function show(\App\Gardener $gardener){
        return view('gardenerDetail', compact('gardener'));
    }
}
