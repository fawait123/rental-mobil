<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Recomended;
use App\Models\Other;
use App\Models\Transaction;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\PaymentDetail;
use App\Models\Property;
use App\Models\Wishlist;
use App\Models\Midtrans;
use App\Services\Midtrans\CoreApi;
use App\Services\Midtrans\CallbackService;

class WelcomeController extends Controller
{
    public function index()
    {
        $transaction = [];
        if (auth()->user()) {
            $customer = Customer::where('user_id', auth()->user()->id)->first();
            $transaction = Transaction::with(['property.car', 'payment.detail.midtrans'])->where('customer_id', $customer ? $customer->id : null)->where('status', 'process')->get();
        }
        return view('frontend.pages.home.index', [
            'banner' => Banner::with(['property.company', 'property.car'])->where('is_show', true)->orderBy('id', 'DESC')->take(5)->get(),
            'recomended' => Recomended::with(['property.company', 'property.car'])->where('is_show', true)->orderBy('id', 'DESC')->take(4)->get(),
            'other' => Other::with(['property.company', 'property.car'])->where('is_show', true)->orderBy('id', 'DESC')->take(10)->get(),
            'transaction' => $transaction
        ]);
    }

    public function product()
    {
        $transaction = [];
        if (auth()->user()) {
            $customer = Customer::where('user_id', auth()->user()->id)->first();
            $transaction = Transaction::with(['property.car', 'payment.detail.midtrans'])->where('customer_id', $customer->id)->where('status', 'process')->get();
        }
        return view('frontend.pages.product.index', [
            'transaction' => $transaction
        ]);
    }

    public function contact()
    {
        $transaction = [];
        if (auth()->user()) {
            $customer = Customer::where('user_id', auth()->user()->id)->first();
            $transaction = Transaction::with(['property.car', 'payment.detail.midtrans'])->where('customer_id', $customer->id)->where('status', 'process')->get();
        }
        return view('frontend.pages.contact.index', [
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
        if (auth()->user()) {
            $customer = Customer::where('user_id', auth()->user()->id)->first();
            $transaction = Transaction::with(['property.car', 'payment.detail.midtrans'])->where('customer_id', $customer->id)->where('status', 'process')->get();
        }

        $property = Property::with(['car', 'company.owner'])->where('id', $id)->first();
        if ($property) {
            return view('frontend.pages.product.detail', [
                'transaction' => $transaction,
                'property' => $property
            ]);
        }

        return abort(404);
    }

    public function account()
    {
        $transaction = [];
        $customer = Customer::where('user_id', auth()->user()->id)->first();
        if (auth()->user()) {
            $transaction = Transaction::with(['property.car', 'payment.detail.midtrans'])->where('customer_id', $customer->id)->where('status', 'process')->get();
        }
        $order = Transaction::with(['property.car', 'payment.detail.midtrans'])->where('customer_id', $customer->id)->get();

        return view('frontend.pages.account.index', [
            'transaction' => $transaction,
            'customer' => $customer,
            'order' => $order
        ]);
    }

    public function addWislisht(Request $request)
    {
        $customer = Customer::where('user_id', auth()->user()->id)->first();
        $wishtlist = Wishlist::where('customer_id', $customer->id)->where('property_id', $request->id)->first();
        if (!$wishtlist) {
            Wishlist::create([
                'customer_id' => $customer->id,
                'property_id' => $request->id
            ]);
            return redirect()->route('product.detail', $request->id)->with(['message' => 'Add wishlist successfully']);
        }
        return redirect()->route('product.detail', $request->id)->with(['message' => 'The same product is already on the wishlist']);
    }

    public function wishlist()
    {
        $transaction = [];
        $customer = Customer::where('user_id', auth()->user()->id)->first();
        if (auth()->user()) {
            $transaction = Transaction::with(['property.car', 'payment.detail.midtrans'])->where('customer_id', $customer->id)->where('status', 'process')->get();
        }
        $wishlist = Wishlist::with(['customer', 'property.car', 'property.company'])->where('customer_id', $customer->id)->get();
        return view('frontend.pages.wishlist.index', [
            'transaction' => $transaction,
            'customer' => $customer,
            'wishlist' => $wishlist
        ]);
    }

    public function destroy($id)
    {
        $wishlist = Wishlist::find($id);
        if ($wishlist) {
            $wishlist->delete();
            return redirect()->route('wishlist')->with(['message' => 'Wishlist removed']);
        }
        return abort(404);
    }

    public function pay(Request $request, $id)
    {
        $payment = PaymentDetail::with(['payment.transaction.property.car'])->find($id);
        if ($payment) {
            $transaction = [];
            $customer = Customer::where('user_id', auth()->user()->id)->first();
            if (auth()->user()) {
                $transaction = Transaction::with(['property.car', 'payment.detail.midtrans'])->where('customer_id', $customer->id)->where('status', 'process')->get();
            }

            return view('frontend.pages.pay.index', [
                'transaction' => $transaction,
                'payment' => $payment,
            ]);
        }

        return abort(404);
    }

    public function payment(Request $request)
    {
        try {
            //code...
            $payment = PaymentDetail::with(['payment.transaction.property.car'])->find($request->id);
            if ($payment) {
                $params = [
                    'transaction_details' => [
                        'order_id' => rand(),
                        'gross_amount' => $payment->nominal,
                    ],
                    'customer_details' => [
                        'first_name' => $payment->payment->transaction->name,
                        'email' => $payment->payment->transaction->email,
                        'phone' => $payment->payment->transaction->telp,
                    ],
                    'payment_type' => 'bank_transfer',
                    'bank_transfer' => array(
                        'bank' => $request->payment,                // optional
                    )
                ];
                $coreApi = new CoreApi();
                $response = $coreApi->charge($params);
                if ($response) {
                    Midtrans::create([
                        'payment_detail_id' => $payment->id,
                        'transaction_id' => $response->transaction_id,
                        'order_id' => $response->order_id,
                        'merchant_id' => $response->merchant_id,
                        'gross_amount' => $response->gross_amount,
                        'currency' => $response->currency,
                        'payment_type' => $response->payment_type,
                        'transaction_time' => $response->transaction_time,
                        'transaction_status' => $response->transaction_status,
                        'fraud_status' => $response->fraud_status,
                        'expire_time' => $response->expire_time ?? '',
                        'bank' => $response->va_numbers[0]->bank,
                        'va_number' => $response->va_numbers[0]->va_number,
                    ]);
                    return redirect()->route('welcome')->with(['message' => "Success, Bank Transfer transaction is created"]);
                }

                return redirect()->route('welcome')->with(['error' => 'an error occurred while making the payment']);
            }


            return abort(404);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with(['message' => $th->getMessage() . " , Please try again"]);
        }
    }


    public function notification()
    {
        try {
            //code...
            $callback = new CallbackService;

            if ($callback->isSignatureKeyVerified()) {
                $notification = $callback->getNotification();
                $order = $callback->getOrder();

                if ($notification == 'settlement' || $notification == 'capture') {
                    Midtrans::where('order_id', $order)->update([
                        'transaction_status' => $notification,
                    ]);

                    $midtrans = Midtrans::where('order_id', $order)->first();
                    PaymentDetail::where('id', $midtrans->payment_detail_id)->update([
                        'status' => 'paid'
                    ]);

                    return response()
                        ->json([
                            'success' => true,
                            'status' => 'success',
                            'message' => 'Notification successfully processed',
                            'order' => $order,
                            'notification' => $notification
                        ]);
                }

                if ($notification == 'expire') {
                    Midtrans::where('order_id', $order)->update([
                        'transaction_status' => $notification,
                    ]);

                    return response()
                        ->json([
                            'success' => true,
                            'status' => 'expired',
                            'message' => 'Notification successfully processed',
                            'order' => $order,
                            'notification' => $notification
                        ]);
                }

                if ($notification == 'cancel') {
                    Midtrans::where('order_id', $order)->update([
                        'transaction_status' => $notification,
                    ]);
                    return response()
                        ->json([
                            'success' => true,
                            'status' => 'cancelled',
                            'message' => 'Notification successfully processed',
                            'order' => $order,
                            'notification' => $notification
                        ]);
                }

                if ($notification == 'pending') {
                    Midtrans::where('order_id', $order)->update([
                        'transaction_status' => $notification,
                    ]);
                    return response()
                        ->json([
                            'success' => true,
                            'status' => 'pending',
                            'message' => 'Notification successfully processed',
                            'order' => $order,
                            'notification' => $notification
                        ]);
                }

                return response()
                    ->json([
                        'success' => true,
                        'status' => 'not found',
                        'message' => 'Notification successfully processed',
                        'order' => $order,
                        'notification' => $notification
                    ]);
            } else {
                return response()
                    ->json([
                        'error' => true,
                        'message' => 'Signature key not verified',
                    ], 403);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'error' => true,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
