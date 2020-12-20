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
        
        $portofolios = request()->file('portfolios');
        
        $data = request()->validate([
            'competence' => ['required'],
            'name' => ['required', 'min:5', 'unique:gardeners,name'],
            'image' => ['required'],
            'like' => ['required', 'integer', "min:1", "max:100"],
            'experience' => ['required', 'integer', "min:1"],
            'price' => ['required', 'integer', "min:5000"],
        ]);
        
        $portofoliosPath = [];
        if(request()->hasFile('portfolios')){
            foreach ($portofolios as $portofolio) {
                $imagePath = $portofolio->store('uploads', 'public');
                array_push($portofoliosPath, $imagePath);
            }
        }
        $imagePath =request('image')->store('uploads', 'public');
        $gardener = new \App\Gardener();
        $gardener->competence_id = $data['competence'];
        $gardener->name = $data['name'];
        $gardener->image = 'storage/'.$imagePath;
        $gardener->likes = $data['like'];
        $gardener->experience = $data['experience'];
        $gardener->price_per_day = $data['price'];
        $gardener->save();

        foreach ($portofoliosPath as $portofolioPath) {
            $gardenerPortofolio = new \App\GardenerPortofolio();
            $gardenerPortofolio->gardener_id = $gardener->id;
            $gardenerPortofolio->image = 'storage/'.$portofolioPath;
            $gardenerPortofolio->save();
        }
        return redirect()->back()->with('success', 'New gardener has been submited!');
    }
    public function edit(\App\Gardener $gardener){
        $competences = \App\Competence::all();
        return view('editGardener', compact('competences','gardener'));
    }
    public function update(\App\Gardener $gardener){
        dd("in development..");
    }

    public function destroy(\App\Gardener $gardener){
        if(File::exists(public_path($gardener->image))){
            File::delete(public_path($gardener->image));
        }
        else{
            return redirect()->back()->with('alert', 'image file not found!');
        }
        
        foreach ($gardener->gardenerPortofolios as $portofolio) {
            if(File::exists(public_path($portofolio->image))){
                File::delete(public_path($portofolio->image));
            }
            else{
                return redirect()->back()->with('alert', 'portofolio image file not found!');
            }
        }
        $gardener->delete();
        
        return redirect('/gardener');
    }
}
