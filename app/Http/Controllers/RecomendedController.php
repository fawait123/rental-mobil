<?php

namespace App\Http\Controllers;

use App\Models\Recomended;
use App\Models\Property;
use Illuminate\Http\Request;

class RecomendedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.frontend.recomended.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.frontend.recomended.form',[
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
            'property_id'=>'required|unique:recomendeds,property_id,NULL,NULL,deleted_at,NULL',
            'is_show'=>'required',
        ]);

        recomended::create($request->all());
        return redirect()->route('recomended.index')->with(['success'=>'Create recomended successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recomended  $recomended
     * @return \Illuminate\Http\Response
     */
    public function show(recomended $recomended)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recomended  $recomended
     * @return \Illuminate\Http\Response
     */
    public function edit(recomended $recomended)
    {
        if($recomended){
            return view('pages.frontend.recomended.form',[
                'id'=>$recomended->id,
                'recomended'=>$recomended,
                'property'=>Property::with(['car','company'])->get()
            ]);
        }

        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recomended  $recomended
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recomended $recomended)
    {
        $request->validate([
            'property_id'=>'required|unique:recomendeds,property_id,'.$recomended->id.',id,deleted_at,NULL',
            'is_show'=>'required',
        ]);

        $recomended->update($request->all());
        return redirect()->route('recomended.index')->with(['success'=>'Update recomended successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recomended  $recomended
     * @return \Illuminate\Http\Response
     */
    public function destroy(recomended $recomended)
    {
        if($recomended){
            $recomended->delete();
            return redirect()->route('recomended.index')->with(['success'=>'Delete recomended successfully']);
        }

        return abort(404);
    }
}
