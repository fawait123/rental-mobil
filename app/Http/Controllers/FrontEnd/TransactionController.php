<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class TransactionController extends Controller
{
    public function checkoutView()
    {
        $customer = Customer::where('user_id',auth()->user()->id)->first();
        return view('frontend.pages.transaction.checkout.index',[
            'customer' => $customer
        ]);
    }
}
