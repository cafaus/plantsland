<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Gardener;
use Illuminate\Support\Facades\File; 

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

    public function destroy(\App\Gardener $gardener){
        if(File::exists(public_path($gardener->image))){
            File::delete(public_path($gardener->image));
        }
        else{
            return redirect()->back()->with('alert', 'image file not found!');
        }
        
        $gardener->delete();
        
        return redirect('/gardener');
    }
}
