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

    public function create(){
        $competences = \App\Competence::all();
        return view('addGardener', compact('competences'));
    }

    public function store(){
        //masi salah
        dd("in development...");
        $dataInputPortofolio = (int) request()->input('portofolio_count') + 1;
        $data = request()->validate([
            'competence' => ['required'],
            'name' => ['required', 'min:5', 'unique:plants,name'],
            'image' => ['required',],
            'like' => ['required', 'integer', "min:1", "max:100"],
            'experience' => ['required', 'integer', "min:1"],
            'price' => ['required', 'integer', "min:5000"],
            'stock' => ['required', 'integer', "min:1"],
            
            
        ]);
        
        $inputPortofolios = [];
        for ($i=0; $i < $dataInputPortofolio; $i++) { 
            $inputPortofolios[$i] =  request()->validate([
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

        for($i=0; $i < $dataInputPortofolio; $i++){
            $plantCare = new \App\PlantCare();
            $plantCare->plant_id = $plant->id;
            $plantCare->care_title = $inputPortofolios[$i]["care-title-{$i}"];
            $plantCare->description = $inputPortofolios[$i]["care-desc-{$i}"];
            $plantCare->save();
        }

        return redirect()->back()->with('success', 'New stationary has been submited!');
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
