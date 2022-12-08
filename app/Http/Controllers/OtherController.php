<?php

namespace App\Http\Controllers;

use App\Models\Other;
use App\Models\Property;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.frontend.other.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.frontend.other.form',[
            'property'=>Property::with(['car','company'])->get()
        ]);
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
            'property_id'=>'required|unique:others,property_id,NULL,NULL,deleted_at,NULL',
            'is_show'=>'required',
        ]);

        other::create($request->all());
        return redirect()->route('other.index')->with(['success'=>'Create other successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\other  $other
     * @return \Illuminate\Http\Response
     */
    public function show(other $other)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit(other $other)
    {
        if($other){
            return view('pages.frontend.other.form',[
                'id'=>$other->id,
                'other'=>$other,
                'property'=>Property::with(['car','company'])->get()
            ]);
        }

        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\other  $other
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, other $other)
    {
        $request->validate([
            'property_id'=>'required|unique:others,property_id,'.$other->id.',id,deleted_at,NULL',
            'is_show'=>'required',
        ]);

        $other->update($request->all());
        return redirect()->route('other.index')->with(['success'=>'Update other successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy(other $other)
    {
        if($other){
            $other->delete();
            return redirect()->route('other.index')->with(['success'=>'Delete other successfully']);
        }

        return abort(404);
    }
}
