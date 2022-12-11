<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Company;
use App\Models\Payment;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::with(['customer','company','property.car'])->find($id);
        $company = Company::where('user_id',auth()->user()->id)->first();
        if($transaction){
            return view('pages.transaction.invoice',[
                'transaction' => $transaction,
                'company' => $company
            ]);
        }

        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->type=='pay'){
            $transaction = Transaction::find($id);
            Payment::where('transaction_id',$transaction->id)->update([
                'status'=>'paid'
            ]);

            return redirect()->route('transaction.show',$id)->with(['success'=>'Pay successfully']);
        }

        if($request->type=='transaction'){
            Transaction::where('id',$id)->update([
                'status'=>'completed'
            ]);

            return redirect()->route('transaction.show',$id)->with(['success'=>'Transaction update successfully']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function download($id)
    {
        $transaction = Transaction::with(['customer','company','property.car'])->find($id);
        $company = Company::where('user_id',auth()->user()->id)->first();
        if($transaction){
            return view('pages.transaction.download',[
                'transaction' => $transaction,
                'company' => $company
            ]);
        }

        return abort(404);
    }
}
