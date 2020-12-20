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
            $plants = Plant::where('name', 'like' , '%' . $params['name'] . '%')->paginate(8);
        } else if ( $req->has('category') ) {
            $category = PlantCategory::where('name' , '=' ,$params['category'])->first();
            $plants = !$category ? [] : Plant::where('plant_category_id' , '=' , $category->id)->paginate(8);
        } else {
            $plants = Plant::paginate(8);
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
    
    public function create(){
        $plantCatagories = \App\PlantCategory::all();
        return view('addPlant', compact('plantCatagories'));
    }

    public function store(){
        
        $dataInputCaresNum = (int) request()->input('care_count') + 1;
        $data = request()->validate([
            'type' => ['required'],
            'origin' => ['required'],
            'name' => ['required', 'min:5', 'unique:plants,name'],
            'image' => ['required'],
            'price' => ['required', 'integer', "min:5000"],
            'height' => ['required', 'integer', "min:1"],
            'pot' => ['required', 'integer', "min:1"],
            'stock' => ['required', 'integer', "min:1"],
            'description' => ['required', 'min:10'],
        ]);

        $inputCares = [];
        for ($i=0; $i < $dataInputCaresNum; $i++) { 
            $inputCares[$i] =  request()->validate([
                "care-title-{$i}" => ['required'],
                "care-desc-{$i}" => ['required'],
            ]);
        }
        $plantOrigin = new \App\PlantOrigin();
        $plantOrigin->description = $data['origin'];
        $plantOrigin->save();

        $imagePath = request('image')->store('uploads', 'public');

        $plant = new \App\Plant();
        $plant->plant_category_id = $data['type'];
        $plant->plant_origin_id = $plantOrigin->id;
        $plant->name = $data['name'];
        $plant->image = 'storage/'.$imagePath;
        $plant->price = $data['price'];
        $plant->height = $data['height'];
        $plant->pot_size = $data['pot'];
        $plant->stock = $data['stock'];
        $plant->description = $data['description'];
        $plant->save();

        for($i=0; $i < $dataInputCaresNum; $i++){
            $plantCare = new \App\PlantCare();
            $plantCare->plant_id = $plant->id;
            $plantCare->care_title = $inputCares[$i]["care-title-{$i}"];
            $plantCare->description = $inputCares[$i]["care-desc-{$i}"];
            $plantCare->save();
        }

        return redirect()->back()->with('success', 'New plant has been submited!');
    }

    public function edit(\App\Plant $plant){
        $plantCatagories = \App\PlantCategory::all();
        return view('editPlant', compact('plantCatagories','plant'));
    }

    public function update(\App\Plant $plant){
        $dataInputCaresNum = (int) request()->input('care_count');
        $data = request()->validate([
            'type' => ['required'],
            'origin' => ['required'],
            'name' => ['required', 'min:5', "unique:plants,name,{$plant->id}"],
            'price' => ['required', 'integer', "min:5000"],
            'height' => ['required', 'integer', "min:1"],
            'pot' => ['required', 'integer', "min:1"],
            'stock' => ['required', 'integer', "min:1"],
            'description' => ['required', 'min:10'],
        ]);
        $inputCares = [];
        for ($i=0; $i < $dataInputCaresNum; $i++) { 
            $inputCares[$i] =  request()->validate([
                "care-title-{$i}" => ['required'],
                "care-desc-{$i}" => ['required'],
            ]);
        }
        $plantOrigin = $plant->plantOrigin;
        $plantOrigin->description = $data['origin'];
        $plantOrigin->save();

        $plant->plant_category_id = $data['type'];
        $plant->name = $data['name'];
        $plant->price = $data['price'];
        $plant->height = $data['height'];
        $plant->pot_size = $data['pot'];
        $plant->stock = $data['stock'];
        $plant->description = $data['description'];
        $plant->save();

        for($i=0; $i < $dataInputCaresNum; $i++){
            $plantCare = $plant->plantCares[$i];
            $plantCare->plant_id = $plant->id;
            $plantCare->care_title = $inputCares[$i]["care-title-{$i}"];
            $plantCare->description = $inputCares[$i]["care-desc-{$i}"];
            $plantCare->save();
        }
        
        return redirect("/store/{$plant->id}");
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
