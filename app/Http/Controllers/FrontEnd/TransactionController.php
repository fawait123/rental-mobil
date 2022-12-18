<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Property;
use App\Models\Transaction;
use App\Models\Payment;
use App\Models\PaymentDetail;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function checkoutView()
    {
        $transaction = [];
        if(auth()->user()){
            $customer = Customer::where('user_id',auth()->user()->id)->first();
            $transaction = Transaction::with(['property.car','payment'])->where('customer_id',$customer->id)->where('status','process')->get();
        }
        $customer = Customer::where('user_id',auth()->user()->id)->first();
        $items = \Cart::getContent();

        if(\Cart::isEmpty()){
            return redirect()->route('welcome')->with(['message'=>'Cart is empty']);
        }
        return view('frontend.pages.transaction.checkout.index',[
            'customer' => $customer,
            'items' => $items,
            'transaction' => $transaction
        ]);
    }

    public function checkoutAction(Request $request)
    {
        $request->validate([
            'start_date'=>'required',
            'end_date'=>'required',
        ]);
        \Cart::clear();
        $range = $this->getDatesFromRange($request->start_date, $request->end_date);
        $property = Property::with('car')->find($request->id);
        \Cart::add(array(
            'id' => $request->id,
            'name' => $property->car->name,
            'price' => $property->price,
            'quantity' => count($range),
            'attributes' => array(
                'start_order' => $request->start_date,
                'end_order' => $request->end_date
            ),
            'associatedModel' => $property
        ));

        return redirect()->route('frontend.checkout.index');
    }

    private function getDatesFromRange($date_time_from, $date_time_to)
    {
        $start = Carbon::createFromFormat('Y-m-d', substr($date_time_from, 0, 10));
        $end = Carbon::createFromFormat('Y-m-d', substr($date_time_to, 0, 10));
        $dates = [];
        while ($start->lte($end)) {
            $dates[] = $start->copy()->format('Y-m-d');
            $start->addDay(1);
        }
        return $dates;
    }


    public function process(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'telp'=>'required',
            'city'=>'required',
            'postal_code'=>'required',
            'payment'=>'required',
            'address'=>'required',
        ]);


        $items = \Cart::getContent();
        $total = \Cart::getTotal();
        $customer = Customer::where('user_id',auth()->user()->id)->first();
        foreach($items as $item){
            $transaction = Transaction::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'telp'=>$request->telp,
                'city'=>$request->city,
                'postal_code'=>$request->postal_code,
                'address'=>$request->address,
                'start_order'=>$item->attributes->start_order,
                'end_order'=>$item->attributes->end_order,
                'total_price'=>$total,
                'price'=>$item->price,
                'number_of_days'=>$item->quantity,
                'note'=>$request->note,
                'property_id'=>$item->associatedModel->id,
                'customer_id'=>$customer->id,
                'company_id'=>$item->associatedModel->company_id,
                'status'=>'process',
                'invoice' =>$this->invoice()
            ]);

            $payment = Payment::create([
                'transaction_id'=>$transaction->id,
                'total_price'=>$total,
                'type'=>$request->payment,
                'status'=>'unpaid'
            ]);

            PaymentDetail::create([
                'payment_id'=>$payment->id,
                'step'=>1,
                'nominal'=>$total,
                'status'=>false
            ]);

            Property::where('id',$item->associatedModel->id)->update([
                'is_available'=>false
            ]);
        }

        return redirect()->route('welcome')->with(['message'=>'Transaction successfully created']);
    }


    public function invoice()
    {
        $count = Transaction::count();
        $count = $count ++;
        return 'INV-'.date('YmdHis').$count;
    }
}
