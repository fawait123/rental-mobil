<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Property;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.frontend.banner.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.frontend.banner.form',[
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
            'property_id'=>'required|unique:banners,property_id,NULL,NULL,deleted_at,NULL',
            'is_show'=>'required',
        ]);

        banner::create($request->all());
        return redirect()->route('banner.index')->with(['success'=>'Create banner successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(banner $banner)
    {
        if($banner){
            return view('pages.frontend.banner.form',[
                'id'=>$banner->id,
                'banner'=>$banner,
                'property'=>Property::with(['car','company'])->get()
            ]);
        }

        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banner $banner)
    {
        $request->validate([
            'property_id'=>'required|unique:banners,property_id,'.$banner->id.',id,deleted_at,NULL',
            'is_show'=>'required',
        ]);

        $banner->update($request->all());
        return redirect()->route('banner.index')->with(['success'=>'Update banner successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(banner $banner)
    {
        if($banner){
            $banner->delete();
            return redirect()->route('banner.index')->with(['success'=>'Delete banner successfully']);
        }

        return abort(404);
    }
}
