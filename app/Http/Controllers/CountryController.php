<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        $country = Country::orderByDesc('id')->get();

        return response()->json($country);
    }

    public function detail($id){
        $country = Country::findOrFail($id);

        return response()->json($country);
    }

    public function add(Request $request){
        $country = Country::create($request->all());

        return response()->json(['msg'=>'Success','data'=>$country]);
    }

    public function edit(Request $request,$id){
        $country = Country::where('id',$id)->update($request->all());

        return response()->json(['msg'=>'Success','data'=>$country]);
    }

    public function remove($id){
        $country = Country::where('id',$id)->delete();

        return response()->json(['msg'=>'Success','data'=>$country]);
    }
}
