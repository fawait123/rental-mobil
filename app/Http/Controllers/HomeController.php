<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Company;
use App\Models\Property;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $company = Company::with('owner')->where('user_id',auth()->user()->id)->first();
        $transaction = Transaction::where('status','completed');
        $property = Property::query();
        $count_company = [];
        $count_user = [];
        if(auth()->user()->role != 'admin'){
            $transaction = $transaction->where('company_id',$company->id);
            $property = $property->where('company_id',$company ? $company->id : null);
        }

        if(auth()->user()->role == 'admin'){
            $count_company = Company::count();
            $count_user = User::count();
        }
        $transaction = $transaction->get();
        $property = $property->count();
        return view('home',[
            'count_car'=>$property,
            'count_transaction'=>count($transaction),
            'count_income'=> collect($transaction)->sum('total_price'),
            'count_company'=>$count_company,
            'count_user'=>$count_user,
        ]);
    }
}
