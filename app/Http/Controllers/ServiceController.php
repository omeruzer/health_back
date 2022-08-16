<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function homeItems(){
        $service = Service::with('company.city','company.country',"images")->orderByDesc('id')->limit(4)->get();

        return response()->json($service);
    }

    public function index(){
        $service = Service::orderByDesc('id')->get();

        return response()->json($service);
    }

    public function detail($id){
        $service = Service::with('company.city','company.country',"images")->findOrFail($id);

        return response()->json($service);
    }

    public function add(Request $request){
        $service = Service::create($request->all());

        return response()->json(['msg'=>'Success','data'=>$service]);
    }

    public function edit(Request $request,$id){
        $service = Service::where('id',$id)->update($request->all());

        return response()->json(['msg'=>'Success','data'=>$service]);
    }

    public function remove($id){
        $service = Service::where('id',$id)->delete();

        return response()->json(['msg'=>'Success','data'=>$service]);
    }
}
