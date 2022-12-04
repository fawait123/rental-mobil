<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Car;
use App\Models\Company;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.masterdata.property.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masterdata.property.form',[
            'brand'=>Brand::get(),
            'type'=>Type::get(),
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
            'name'=>'required',
            'transmisi'=>'required',
            'fuel'=>'required',
            'seat_capacity'=>'required',
            'color'=>'required',
            'number_vehicles'=>'required',
            'type'=>'required',
            'brand'=>'required',
            'price'=>'required|numeric',
            'picture'=>'required',
        ]);

        $car = Car::create([
            'name'=>$request->name,
            'transmisi'=>$request->transmisi,
            'fuel'=>$request->fuel,
            'seat_capacity'=>$request->seat_capacity,
            'color'=>$request->color,
            'number_vehicles'=>$request->number_vehicles,
            'type_id'=>$request->type,
            'brand_id'=>$request->brand,
            'picture'=>$request->picture,
        ]);
        $company = Company::where('user_id',auth()->user()->id)->first();
        Property::create([
            'company_id'=>$company->id,
            'car_id'=>$car->id,
            'price'=>$request->price
        ]);
        return redirect()->route('property.index')->with(['success'=>'Create property successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(property $property)
    {
        if($property){
            return view('pages.masterdata.property.form',[
                'id'=>$property->id,
                'property'=>$property,
                'type'=>Type::get(),
                'brand'=>Brand::get()
            ]);
        }

        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, property $property)
    {
        $request->validate([
            'name'=>'required',
            'transmisi'=>'required',
            'fuel'=>'required',
            'seat_capacity'=>'required',
            'color'=>'required',
            'number_vehicles'=>'required',
            'type'=>'required',
            'brand'=>'required',
            'price'=>'required|numeric',
            'picture'=>'required',
        ]);

        Car::where('id',$request->car_id)->update([
            'name'=>$request->name,
            'transmisi'=>$request->transmisi,
            'fuel'=>$request->fuel,
            'seat_capacity'=>$request->seat_capacity,
            'color'=>$request->color,
            'number_vehicles'=>$request->number_vehicles,
            'type_id'=>$request->type,
            'brand_id'=>$request->brand,
            'picture'=>$request->picture,
        ]);
        $property->update([
            'price'=>$request->price
        ]);


        return redirect()->route('property.index')->with(['success'=>'Update property successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(property $property)
    {
        if($property){
            $property->delete();
            return redirect()->route('property.index')->with(['success'=>'Delete property successfully']);
        }

        return abort(404);
    }
}
