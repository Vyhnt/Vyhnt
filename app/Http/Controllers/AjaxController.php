<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function create()
    {
//        return view('ajax-request');
        return view('ProductView');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        #create or update your data here

//        return view('ajax-request');
        return response()->json(['success'=>'Added new records.']);
    }
}
