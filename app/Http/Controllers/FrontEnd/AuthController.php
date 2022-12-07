<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            "nik" => 'required|unique:customers,nik',
            "name" => 'required',
            "username" => 'required',
            "email" => 'required',
            "telp" => 'required',
            "place" => 'required',
            "birthdate" => 'required',
            "password" => 'required',
            "picture" => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username'=>$request->username,
            'display_name' =>$request->name,
            'telp'=>$request->telp,
            'user_model'=>'App\Models\Customer',
            'role'=>'customer',
        ]);

        Customer::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'telp'=>$request->telp,
            'address'=>$request->address,
            'nik'=>$request->nik,
            'gender'=>$request->gender,
            'place'=>$request->place,
            'birthdate'=>$request->birthdate,
            'picture'=>$request->picture,
            'user_id'=>$user->user_id
        ]);

        return redirect()->route('frontend.login')->with(['message'=>'Register successfully']);
    }

    public function actionRegister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telp'=>['required'],
            'term'=>['required'],
            'identity_number'=>['required'],
            'identity_type'=>['required'],
            'address'=>['required'],
            'gender'=>['required'],
            'picture'=>['required'],
            'place'=>['required'],
            'birthdate'=>['required'],
        ]);

        $user = User::create([
            'name'=>$request->name,
            'display_name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'telp'=>$request->telp,
            'role'=>'customer',
            'user_model'=>'App\Models\Customer',
            'user_id'=>null,
            'is_active'=>1
        ]);

        Customer::create([
            'identity_number'=>$request->identity_number,
            'identity_type'=>$request->identity_type,
            'name'=>$request->name,
            'email'=>$request->email,
            'telp'=>$request->telp,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'place'=>$request->place,
            'birthdate'=>$request->birthdate,
            'picture'=>$request->picture,
            'user_id'=>$user->id
        ]);

        return redirect()->route('frontend.login')->with(['message'=>'Register successfully, Please login']);
    }

    public function actionLogin(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);

        $check = User::where('username',$request->username)->orWhere('email',$request->username)->first();
        if(!$check){
            return redirect()->route('frontend.login')->with(['message'=>'These credentials do not match our records']);
        }

        if(!Hash::check($request->password, $check->password)){
            return redirect()->route('frontend.login')->with(['message'=>'These credentials do not match our records']);
        }

        if($check->is_active == false){
            return redirect()->route('frontend.login')->with(['message'=>'Account is inactive']);
        }
        $remember = $request->remember == 'on'?true:false;
        Auth::login($check,$remember);
        return redirect()->route('welcome');
    }
}
