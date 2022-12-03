<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(Request $request)
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);


        $check = User::where('username',$request->username)->orWhere('email',$request->username)->first();
        if(!$check){
            return redirect()->route('login')->with(['message'=>'These credentials do not match our records']);
        }

        if(!Hash::check($request->password, $check->password)){
            return redirect()->route('login')->with(['message'=>'These credentials do not match our records']);
        }

        if($check->is_active == false){
            return redirect()->route('login')->with(['message'=>'Account is inactive']);
        }
        $remember = $request->remember == 'on'?true:false;
        Auth::login($check,$remember);
        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('welcome');
    }
}
