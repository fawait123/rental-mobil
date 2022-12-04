<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home.index');
    }

    public function product()
    {
        return view('frontend.pages.product.index');
    }

    public function contact()
    {
        return view('frontend.pages.contact.index');
    }
}
