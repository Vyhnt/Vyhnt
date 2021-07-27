<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('Products')->get();
//        redirect("home");
        return view('ProductView');
    }

    public function getData()
    {
        //
        $data = DB::table('Products')->paginate(15);
//        redirect("home");
//        \Log::info($data->toJson());
        return $data->toJson();
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
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Log::info($request);
        $var1 = $request->input('listOrder');
//        \Log::info($var1);
        #create or update your data here
        DB::table('Products') -> insert([
        'productcode'=>$request->input('productCode'),
        'productname'=>$request->input('productName'),
        'producttype'=>$request->input('productType'),
        'listorder'=>$request->input('listOrder'),
        'useflag'=>$request->input('useFlag'),
        ]);

//        return view('ajax-request');
        return response()->json(['success'=>'Added new records.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
        \Log::info($id);
        #create or update your data here
        DB::table("Products")->where('productcode', '=', "$id")->delete();

//        return view('ajax-request');
        return response()->json(['success'=>'Added new records.']);
    }
}
