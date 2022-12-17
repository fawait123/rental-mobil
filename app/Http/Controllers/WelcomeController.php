<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Recomended;
use App\Models\Other;
use App\Models\Transaction;
use App\Models\Customer;
use App\Models\Property;
use App\Models\Wishlist;

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

    public function account()
    {
        $transaction = [];
        $customer = Customer::where('user_id',auth()->user()->id)->first();
        if(auth()->user()){
            $transaction = Transaction::with(['property.car','payment'])->where('customer_id',$customer->id)->where('status','process')->get();
        }
        $order = Transaction::with(['property.car','payment'])->where('customer_id',$customer->id)->get();

        return view('frontend.pages.account.index',[
            'transaction'=>$transaction,
            'customer'=>$customer,
            'order'=>$order
        ]);
    }

    public function addWislisht(Request $request)
    {
        $customer = Customer::where('user_id',auth()->user()->id)->first();
        $wishtlist = Wishlist::where('customer_id',$customer->id)->where('property_id',$request->id)->first();
        if(!$wishtlist){
            Wishlist::create([
                'customer_id'=>$customer->id,
                'property_id'=>$request->id
            ]);
            return redirect()->route('product.detail',$request->id)->with(['message'=>'Add wishlist successfully']);
        }
        return redirect()->route('product.detail',$request->id)->with(['message'=>'The same product is already on the wishlist']);
    }

    public function wishlist()
    {
        $transaction = [];
        $customer = Customer::where('user_id',auth()->user()->id)->first();
        if(auth()->user()){
            $transaction = Transaction::with(['property.car','payment'])->where('customer_id',$customer->id)->where('status','process')->get();
        }
        $wishlist = Wishlist::with(['customer','property.car','property.company'])->where('customer_id',$customer->id)->get();
        return view('frontend.pages.wishlist.index',[
            'transaction'=>$transaction,
            'customer'=>$customer,
            'wishlist'=>$wishlist
        ]);
    }

    public function destroy($id)
    {
        $wishlist = Wishlist::find($id);
        if($wishlist){
            $wishlist->delete();
            return redirect()->route('wishlist')->with(['message'=>'Wishlist removed']);
        }
        return abort(404);
    }
}
