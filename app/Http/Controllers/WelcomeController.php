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

    public function login()
    {
        return view('frontend.pages.login.index');
    }


    public function register()
    {
        return view('frontend.pages.register.index');
    }
}
