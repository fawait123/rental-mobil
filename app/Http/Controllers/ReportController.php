<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function transaction()
    {
        return view('pages.report.transaction.index');
    }

    public function payment()
    {
        return view('pages.report.payment.index');
    }

    public function transactionAdmin()
    {
        return view('pages.report.transaction.admin');
    }


    public function paymentAdmin()
    {
        return view('pages.report.payment.admin');
    }
}
