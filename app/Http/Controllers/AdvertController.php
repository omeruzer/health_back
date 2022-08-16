<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    public function index(){
        $advert = Advert::orderByDesc('id')->get();

        return response()->json($advert);
    }

    public function detail($id){
        $advert = Advert::findOrFail($id);

        return response()->json($advert);
    }

    public function add(Request $request){
        $advert = Advert::create($request->all());

        return response()->json(['msg'=>'Success','data'=>$advert]);
    }

    public function edit(Request $request,$id){
        $advert = Advert::where('id',$id)->update($request->all());

        return response()->json(['msg'=>'Success','data'=>$advert]);
    }

    public function remove($id){
        $advert = Advert::where('id',$id)->delete();

        return response()->json(['msg'=>'Success','data'=>$advert]);
    }
}
