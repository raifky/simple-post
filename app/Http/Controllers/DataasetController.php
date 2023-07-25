<?php

namespace App\Http\Controllers;

use App\Models\Total;
use App\Models\Dataaset;
use Illuminate\Http\Request;

class DataasetController extends Controller
{
    public function index2(){
        return view('layouts.master');
    }
    public function namaaset(){
        $aset = Dataaset::all();

        return view('layouts.masteraset', compact('aset'));
    }
    public function tambahaset(){
        $data = Total::all();

        return view('layouts.insertaset', compact('data'));
    }
    public function insertaset(Request $request){

        Dataaset::create($request->all());
        return redirect()->route('namaaset');
    }
    public function updateaset(Request $request, $id){
        

        $aset = Dataaset::find($id);
        $aset->update($request->all());
        return redirect()->route('namaaset');
    }
    public function tampilaset($id){

        $aset = Dataaset::find($id);
         $data = Total::all();

        return view('layouts.tampilaset', compact('aset'), compact('data'));
    
    }
    public function deleteaset($id){

        $aset = Dataaset::find($id);
        $aset->delete();
        return redirect()->route('namaaset');

    
    }
    
}

