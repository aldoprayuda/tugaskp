<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Kerjasama;
use App\Vendor;
use DB;
use View;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class MorrisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCustomer = DB::table('Customer')->where('status', '=', 1)->get();
        return view('customerforchart', compact('listCustomer'));
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
    public function show()
    {
        $idCustomer = Input::get('idCustomer');

        $kerjaSamaCustomerVendor = DB::table('Kerjasama')->where('customer_id', $idCustomer)->where('status',1)->get();
        for ($i=0; $i < count($kerjaSamaCustomerVendor); $i++) {
            $vendorName = DB::table('Vendor')->where('id', $kerjaSamaCustomerVendor[$i]->vendor_id)->pluck('name')->first();

            $kerjaSamaCustomerVendor[$i]->vendorName = $vendorName;
        }
        return view('morris', compact('kerjaSamaCustomerVendor'));
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
