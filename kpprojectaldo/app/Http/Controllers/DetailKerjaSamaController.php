<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parameter;
use App\Kerjasama;
use DB;
use View;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class DetailKerjaSamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idKerjasama = Input::get('kerjasamaId');
        //dd('masuk1');
        $categoryparameter = DB::table('Parameter')->get();
        //dd('masuk2');
        $parameterId = DB::table('Parameter')->where('kerjasama_id',$idKerjasama)->pluck('id')->first();
        //dd($parameterId);
        if ($parameterId != null) {
        //dd('masuk sini');
        $detailParameter = DB::table('Parameter')->where('id', $parameterId)->first();
        //dd('masuk4');
        $categorykerjasama = DB::table('Kerjasama')->where('id',$idKerjasama)->pluck('ratarata');
        //dd($categorykerjasama);
        } else {
            $categorykerjasama = null;
        }

        $customerId = DB::table('Kerjasama')->where('id',$idKerjasama)->pluck('customer_id');
        $vendorId = DB::table('Kerjasama')->where('id', $idKerjasama)->pluck('vendor_id');
        $nameVendor = DB::table('vendor')->where('id', $vendorId)->pluck('name')->first();
        $nameCustomer = DB::table('Customer')->where('id', $customerId)->pluck('name')->first();



        if($categorykerjasama != null)
        {
            //dd($userDB);
            return view::make('detailkerjasama',compact('idKerjasama', 'nameVendor','nameCustomer','detailParameter','categorykerjasama'));
        }
        
        
        else {

            return redirect()->route('tables');

         }
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
    }
}
