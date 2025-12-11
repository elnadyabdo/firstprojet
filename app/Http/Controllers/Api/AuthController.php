<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
public function register(Request $request){
    $validate=$request->validate([
        'name'=>['required','string','max:255'],
        'email'=>['required','email','max:255','uniqe:users,email'],
        'password'=>['required','confirmed','min:8'],
        
    ]
    );
   $user=User::create([
    'name'=>$validate['name'],
    'email'=>$validate['email'],
    'passowrd'=>Hash::make($validate['passowrd'])
   ]); 
   $token=$user->createToken('apiaToken')->plaintTextToken;
   return response->json([
    'status'=>true,
    'message'=>'تم إنشاء الحساب بنجاح',
    'data'   =>[
        'id'=>$user->id,
        'name'=>$user->name,
        'email'=>$user->email,
        'token'=>$user->token,
    ] 
   ]);
}  

}
