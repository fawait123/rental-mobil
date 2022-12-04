<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class AdminCompanyController extends Controller
{
    public function index()
    {
        return view('pages.masterdata.admin.company.index');
    }

    public function listCar()
    {
        return view('pages.masterdata.admin.company.property.index');
    }

    public function isShow(Request $request)
    {
        $id = $request->id;
        Property::where('id',$request->id)->update([
            'is_show'=>$request->value
        ]);

        return 'success';
    }
}
