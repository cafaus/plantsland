<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Plant;
use \App\PlantCategory;
use Illuminate\Support\Facades\File; 
class PlantsController extends Controller
{
    public function index(Request $req){
        $params = $req->query();
        $plants = [];
        if ( $req->has('name') ) {
            $plants = Plant::where('name', 'like' , '%' . $params['name'] . '%')->get();
        } else if ( $req->has('category') ) {
            $category = PlantCategory::where('name' , '=' ,$params['category'])->first();
            $plants = !$category ? [] : Plant::where('plant_category_id' , '=' , $category->id)->get();
        } else {
            $plants = Plant::all();
        }
        return view('storeList', compact('plants'));
    }
    public function welcome() {
        $categories = PlantCategory::all();
        $plants = [];
        $categoryIds = [];

        foreach( $categories as $category ) {
            if( count($plants) >= 4 ) break;
            $plant = Plant::where('plant_category_id', $category->id)->first();
            array_push( $plants, $plant );
        }
        
        return view('welcome',compact('plants'));
    }
    public function show(\App\Plant $plant){
        $plants = \App\Plant::all()->take(8);
        return view('plantDetail', compact('plant', 'plants'));
    }

    public function destroy(\App\Plant $plant){
        $plantOriginId = $plant->plant_origin_id;
        if(File::exists(public_path($plant->image))){
            File::delete(public_path($plant->image));
        }
        else{
            return redirect()->back()->with('alert', 'image file not found!');
        }
        $plant->delete();
        $plantOrigin = \App\PlantOrigin::find($plantOriginId);
        if($plantOrigin){
            $plantOrigin->delete();
        }
        return redirect('/store');
    }
}
