<?php

namespace App\Http\Controllers;

use App\Models\Total;
use App\Models\Dataaset;
use Illuminate\Http\Request;

class TotalController extends Controller
{
    public function index(){

        $data = Total::all();

         return view('layouts.totalaset', compact('data'));
        // return view('layouts.totalaset', [
        //     "active" => "datakategori",
        //     "data" => compact('data')
        // ]);
    }
    public function index3(){

        return view('insert');
    }
    public function insertdata(Request $request){
        // dd($request->all());
        Total::create($request->all());
        return redirect()->route('datakategori');
    }
    public function tampilkategori($id){

        $data = Total::find($id);
        // dd($data);

         return view('tampilkategori', compact('data'));
    }
    public function updatekategori(Request $request, $id){

        $data = Total::find($id);
        $data->update($request->all());
        return redirect()->route('datakategori');
    }
    public function deletekategori($id){
        $data = Total::find($id);
        $data->delete();
        return redirect()->route('datakategori');
    }
}
