<?php

namespace App\Http\Controllers;

use App\Models\AnimalModel;


use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){
         $data = [
            'title' => "Halaman Utama"
         ]; 

         return view('pages/home',$data);
     }

     public function menu(){
        $data = [
           'title' => "Menu Utama"
        ]; 

        return view('pages/main_menu',$data);
    }

    public function scan_qr(){
        $data = [
           'title' => "Scan QR"
        ]; 

        return view('pages/scan_qr',$data);
    }

    public function list(){
       $animal = AnimalModel::where('scan','1')->get();
       $data = [
         'title' => "List Binatang",
         'animal' => $animal
      ]; 

      return view('pages/list_binatang',$data);
    }

     
}
