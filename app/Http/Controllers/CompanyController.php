<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function homeItems(){
        $company = Company::with('city','country')->orderByDesc('id')->limit(4)->get();

        return response()->json($company);
    }

    public function index(){
        $company = Company::orderByDesc('id')->get();

        return response()->json($company);
    }

    public function detail($id){
        $company = Company::findOrFail($id);

        return response()->json($company);
    }

    public function add(Request $request){
        $company = Company::create($request->all());

        return response()->json(['msg'=>'Success','data'=>$company]);
    }

    public function edit(Request $request,$id){
        $company = Company::where('id',$id)->update($request->all());

        return response()->json(['msg'=>'Success','data'=>$company]);
    }

    public function remove($id){
        $company = Company::where('id',$id)->delete();

        return response()->json(['msg'=>'Success','data'=>$company]);
    }
}
