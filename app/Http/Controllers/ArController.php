<?php

namespace App\Http\Controllers;

use App\Models\AnimalModel;
use App\Models\AnimalPartModel;
use Illuminate\Http\Request;

class ArController extends Controller
{
    

    public function result($id)
    {
        $animal = AnimalModel::find($id);
        $animal_part = AnimalPartModel::where('id_animal',$id)->get();
    
        $data = [
            'title' => "Scan Result",
            'id' => $id,
            'animal' => $animal,
            'animal_part' => $animal_part 
         ]; 
 
         return view('pages/scan_result',$data);

    }

    public function detail($id)
    {
        $animal = AnimalModel::find($id);
        $animal_part = AnimalPartModel::where('id_animal',$id)->get();
    
        $data = [
            'title' => "Scan Result",
            'id' => $id,
            'animal' => $animal,
            'animal_part' => $animal_part 
         ]; 
 
         return view('pages/detail',$data);

    }


    public function show($id)
    {
        $animal = AnimalModel::find($id);
        $data = [
            'title' => "Show AR",
            'animal' => $animal
         ]; 
 
         return view('pages/show_ar',$data);

    }

    public function insert(Request $request){
        $animal = AnimalModel::find($request->input('id'));
        $animal->scan = 1;
        $animal->save();

        return redirect()->route("index.menu");
    }


}
