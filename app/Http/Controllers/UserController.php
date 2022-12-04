<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.masterdata.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masterdata.user.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'username'=>'required|unique:users,username',
            'telp'=>'required',
            'is_active'=>'required',
            'password'=>'required|string|min:8|confirmed'
        ]);

        User::create([
            'name'=>$request->name,
            'display_name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'telp'=>$request->telp,
            'is_active'=>$request->is_active,
            'password'=> Hash::make($request->password),
            'role'=>'retail'
        ]);
        return redirect()->route('user.index')->with(['success'=>'Create user successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if($user){
            return view('pages.masterdata.user.form',[
                'id'=>$user->id,
                'user'=>$user
            ]);
        }

        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email,'.$user->id,
            'username'=>'required|unique:users,username,'.$user->id,
            'telp'=>'required',
            'is_active'=>'required'
        ]);

        $user->update([
            'name'=>$request->name,
            'display_name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'telp'=>$request->telp,
            'is_active'=>$request->is_active,
        ]);
        return redirect()->route('user.index')->with(['success'=>'Update user successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user){
            $user->delete();
            return redirect()->route('user.index')->with(['success'=>'Delete user successfully']);
        }

        return abort(404);
    }
}
