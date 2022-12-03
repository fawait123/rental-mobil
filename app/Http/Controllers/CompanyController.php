<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::with('owner')->where('user_id',auth()->user()->id)->first();
        return view('pages.masterdata.company.index',[
            'company'=>$company
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masterdata.company.form');
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
            'name'=>'required|unique:companies,name',
            'email'=>'required|unique:companies,email',
            'telp'=>'required|unique:companies,telp',
            'picture'=>'required',
            'address'=>'required',
            'location'=>'required',
        ]);

        Company::create([
            'name'=>$request->name,
            'user_id'=>auth()->user()->id,
            'email'=>$request->email,
            'telp'=>$request->telp,
            'picture'=>$request->picture,
            'address'=>$request->address,
            'location'=>$request->location
        ]);
        return redirect()->route('company.index')->with(['success'=>'Create company successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        if($company){
            return view('pages.masterdata.company.form',[
                'id'=>$company->id,
                'company'=>$company
            ]);
        }

        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $company->update($request->all());
        return redirect()->route('company.index')->with(['success'=>'Update company successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        if($company){
            $company->delete();
            return redirect()->route('company.index')->with(['success'=>'Delete company successfully']);
        }

        return abort(404);
    }
}
