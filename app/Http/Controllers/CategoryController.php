<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function homeItems(){
        $category = Category::where('parent_id',null)->orderByDesc('id')->get();

        return response()->json($category);
    }

    public function index(){
        $category = Category::orderByDesc('id')->get();

        return response()->json($category);
    }

    public function detail($id){
        $category = Category::findOrFail($id);

        return response()->json($category);
    }

    public function add(Request $request){
        $category = Category::create($request->all());

        return response()->json(['msg'=>'Success','data'=>$category]);
    }

    public function edit(Request $request,$id){
        $category = Category::where('id',$id)->update($request->all());

        return response()->json(['msg'=>'Success','data'=>$category]);
    }

    public function remove($id){
        $category = Category::where('id',$id)->delete();

        return response()->json(['msg'=>'Success','data'=>$category]);
    }
}
