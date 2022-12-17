<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Property;
use App\Models\Transaction;
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
        $brand = Brand::get();
        $type = Type::get();
        $transaction = Transaction::where('company_id',$company->id)->where('status','completed')->get();
        return view('pages.masterdata.company.index',[
            'company'=>$company,
            'count_car'=>Property::where('company_id',$company ? $company->id : null)->count(),
            'count_transaction'=>count($transaction),
            'count_income'=> collect($transaction)->sum('total_price'),
            'property'=>Property::with(['car.brand','car.type'])->where('company_id',$company ? $company->id : null)->get()
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

    public function cart(Request $request)
    {
        $periode = $this->periode();
       if($request->type=='transaction'){
        $data = [];
        $company = Company::where('user_id',auth()->user()->id)->first();
        foreach($periode as $p){
            array_push($data,[
                'count'=>Transaction::where('company_id',$company->id)->whereBetween('start_order',[date('Y').$p['code'].'01',date('Y').$p['code'].'31'])->count(),
                'month'=>$p['name']
            ]);
        }

        return $data;
       }

       if($request->type=='income'){
        $data = [];
        $company = Company::where('user_id',auth()->user()->id)->first();
        foreach($periode as $p){
            $transaction = Transaction::where('company_id',$company->id)->whereBetween('start_order',[date('Y').$p['code'].'01',date('Y').$p['code'].'31'])->get();
            array_push($data,[
                'count'=>collect($transaction)->sum('total_price'),
                'month'=>$p['name']
            ]);
        }

        return $data;
       }
    }

    public function periode()
    {
        return [
            [
                "name"=>"Jan",
                "code"=>"01"
            ],
            [
                "name"=>"Feb",
                "code"=>"02"
            ],
            [
                "name"=>"Mar",
                "code"=>"03"
            ],
            [
                "name"=>"Apr",
                "code"=>"04"
            ],
            [
                "name"=>"Mei",
                "code"=>"05"
            ],
            [
                "name"=>"Jun",
                "code"=>"06"
            ],
            [
                "name"=>"Jul",
                "code"=>"07"
            ],
            [
                "name"=>"Agust",
                "code"=>"08"
            ],
            [
                "name"=>"Sept",
                "code"=>"09"
            ],
            [
                "name"=>"Okt",
                "code"=>"10"
            ],
            [
                "name"=>"Nov",
                "code"=>"11"
            ],
            [
                "name"=>"Des",
                "code"=>"12"
            ]
        ];
    }
}
