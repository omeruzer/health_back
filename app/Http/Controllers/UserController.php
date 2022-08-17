<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function user(){
        $user = auth()->user();

        return response()->json($user);
    }

    public function login(Request $request)
    {
        $data = [
            'email'=>  $request->email,
            'password'=> $request->password,
        ];
        if(Auth::attempt($data)){
            $token = auth()->user()->createToken('myapp')->plainTextToken;

            return response()->json(['message'=>'Success','user'=>$request->email,'token'=>$token]);
        }else{
            return response()->json(['message'=>'Login Fail']);
        }
    }

    public function register(Request $request){
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'shop_name'=>$request->shop_name,
            'shop_address'=>$request->shop_address,
            'password'=>Hash::make($request->password),
        ]);

        return response()->json(['message'=>'Success','user'=>$user]);
    }
}
