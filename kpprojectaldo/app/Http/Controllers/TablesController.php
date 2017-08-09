<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Kerjasama;
use View;
use Carbon\Carbon;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKerjasama = DB::table('Kerjasama')->where('status',1)->get();
        $customerNames = [];
        $vendorNames = [];
        $kerjasamaDetail = [];
        $decision = [];

        for ($i=0; $i < count($dataKerjasama); $i++) { 
            $nameCustomer = DB::table('Customer')->where('id', $dataKerjasama[$i]->customer_id)->pluck('name')->first();
            $nameVendor = DB::table('Vendor')->where('id', $dataKerjasama[$i]->vendor_id)->pluck('name')->first();

            $customerNames[$i] = $nameCustomer;
            $vendorNames[$i] = $nameVendor;
        }

        $kerjasamaDetail = DB::table('Kerjasama')->where('status',1)->get();
        //dd($kerjasamaDetail);
        for ($i=0; $i < count($kerjasamaDetail) ; $i++) {
            //dd($kerjasamaDetail[$i]->status);
            
                $decision[$i] = DB::table('Kerjasama')->where('id', $kerjasamaDetail[$i]->id)->pluck('ratarata')->first();
           
                
        }
        return view::make('tables', compact('customerNames', 'vendorNames', 'kerjasamaDetail', 'decision'));
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
         $customerId = Input::get('customerId');
         $arrayVendorId = Input::get('arrayVendorId');
         
         for ($i=0; $i < count($arrayVendorId); $i++) {
            $kerjasama = new Kerjasama;
            $kerjasama->awal_mulai = Carbon::now();
            $kerjasama->berakhir = null;
            $kerjasama->vendor_id = $arrayVendorId[$i];
            $kerjasama->customer_id = $customerId;
            $kerjasama->ratarata = null;
            $kerjasama->status = 1;
            $kerjasama->updated_at = Carbon::now();
            $kerjasama->created_at = Carbon::now();

            $kerjasama->save();
         }

        $dataKerjasama = DB::table('Kerjasama')->where('status',1)->get();
        $customerNames = [];
        $vendorNames = [];
        $kerjasamaDetail = [];
        $decision = [];

        for ($i=0; $i < count($dataKerjasama); $i++) { 
            $nameCustomer = DB::table('Customer')->where('id', $dataKerjasama[$i]->customer_id)->pluck('name');
            $nameVendor = DB::table('Vendor')->where('id', $dataKerjasama[$i]->vendor_id)->pluck('name');

            $customerNames[$i] = $nameCustomer;
            $vendorNames[$i] = $nameVendor;

            $kerjasamaDetail = DB::table('Kerjasama')->get();
        }
         $kerjasamaDetail = DB::table('Kerjasama')->where('status',1)->get();
        for ($i=0; $i < count($kerjasamaDetail) ; $i++) { 
            
                $decision[$i] = DB::table('Kerjasama')->where('id', $kerjasamaDetail[$i]->id)->pluck('ratarata')->first();
            
                
        }
        return view::make('tables', compact('customerNames', 'vendorNames', 'kerjasamaDetail','decision'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
