<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $city = City::orderByDesc('id')->get();

        return response()->json($city);
    }

    public function detail($id){
        $city = City::findOrFail($id);

        return response()->json($city);
    }

    public function add(Request $request){
        $city = City::create($request->all());

        return response()->json(['msg'=>'Success','data'=>$city]);
    }

    public function edit(Request $request,$id){
        $city = City::where('id',$id)->update($request->all());

        return response()->json(['msg'=>'Success','data'=>$city]);
    }

    public function remove($id){
        $city = City::where('id',$id)->delete();

        return response()->json(['msg'=>'Success','data'=>$city]);
    }
}
