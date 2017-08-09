<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Kerjasama;
use View;

class AccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerId = Input::get('customerId');
        $arrayVendorId = Input::get('assign');

        $customerName = [];
        $customer = DB::table('Customer')->where('id', '=', $customerId)->pluck('name')->first();
        $customerName[0] = $customer;
        $vendorName = [];
        $counter = 0;
        for ($i=0; $i < count($arrayVendorId); $i++) {
            $name = DB::table('Vendor')->where('id', '=', $arrayVendorId[$i] )->pluck('name')->first();
            $vendorName[$i] = $name;
            $customerName[$i+1] = '';
            $counter++;
        };
        return view::make('tablesDetail',compact('customerName', 'vendorName', 'counter', 'customerId', 'arrayVendorId'));
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
    public function show($id,$arrayVendorId)

    {
        $customerId = $id;
        $customer = DB::table('Customer')->where('id', '=', $id)->get();


        $vendorId = $arrayVendorId;
        $vendorName = [];
        for ($i=0; $i < count($vendorId); $i++) {
            $name = DB::table('Vendor')->where('id', $vendorId[$i]->vendor_id)->get();
            $vendorName[$i] = $name;
        };

        return view::make('tablesDetail',compact('customerName', 'vendorName'));
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
    }
}
