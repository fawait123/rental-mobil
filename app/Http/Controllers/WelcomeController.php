<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Recomended;
use App\Models\Other;
use App\Models\Transaction;
use App\Models\Customer;
use App\Models\Property;

class WelcomeController extends Controller
{
    public function index()
    {
        $transaction = [];
        if(auth()->user()){
            $customer = Customer::where('user_id',auth()->user()->id)->first();
            $transaction = Transaction::with(['property.car','payment'])->where('customer_id',$customer->id)->where('status','process')->get();
        }
        return view('frontend.pages.home.index',[
            'banner'=>Banner::with(['property.company','property.car'])->where('is_show',true)->orderBy('id','DESC')->take(5)->get(),
            'recomended'=>Recomended::with(['property.company','property.car'])->where('is_show',true)->orderBy('id','DESC')->take(4)->get(),
            'other'=>Other::with(['property.company','property.car'])->where('is_show',true)->orderBy('id','DESC')->take(10)->get(),
            'transaction'=>$transaction
        ]);
    }

    public function product()
    {
        $transaction = [];
        if(auth()->user()){
            $customer = Customer::where('user_id',auth()->user()->id)->first();
            $transaction = Transaction::with(['property.car','payment'])->where('customer_id',$customer->id)->where('status','process')->get();
        }
        return view('frontend.pages.product.index',[
            'transaction' => $transaction
        ]);
    }

    public function contact()
    {
        $transaction = [];
        if(auth()->user()){
            $customer = Customer::where('user_id',auth()->user()->id)->first();
            $transaction = Transaction::with(['property.car','payment'])->where('customer_id',$customer->id)->where('status','process')->get();
        }
        return view('frontend.pages.contact.index',[
            'transaction' => $transaction
        ]);
    }

    public function login()
    {
        return view('frontend.pages.login.index');
    }


    public function register()
    {
        return view('frontend.pages.register.index');
    }

    public function detail($id)
    {
        $transaction = [];
        if(auth()->user()){
            $customer = Customer::where('user_id',auth()->user()->id)->first();
            $transaction = Transaction::with(['property.car','payment'])->where('customer_id',$customer->id)->where('status','process')->get();
        }

        $property = Property::with(['car','company.owner'])->where('id',$id)->first();
        if($property){
            return view('frontend.pages.product.detail',[
                'transaction'=>$transaction,
                'property'=>$property
            ]);
        }

        return abort(404);
    }
}
