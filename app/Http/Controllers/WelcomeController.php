<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Recomended;
use App\Models\Other;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home.index',[
            'banner'=>Banner::with(['property.company','property.car'])->where('is_show',true)->orderBy('id','DESC')->take(5)->get(),
            'recomended'=>Recomended::with(['property.company','property.car'])->where('is_show',true)->orderBy('id','DESC')->take(4)->get(),
            'other'=>Other::with(['property.company','property.car'])->where('is_show',true)->orderBy('id','DESC')->take(10)->get(),
        ]);
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
