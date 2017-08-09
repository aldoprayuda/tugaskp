<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parameter;
use App\Kerjasama;
use DB;
use View;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;


class ParameterVendor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idKerjasama = Input::get('kerjasamaId');
        $vendorId = DB::table('Kerjasama')->where('id', $idKerjasama)->pluck('vendor_id');
        $nameVendor = DB::table('vendor')->where('id', $vendorId)->pluck('name')->first();

       return view::make('parametervendor',compact('idKerjasama','nameVendor'));
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
    public function store()
    {

        $Idkerjasama = Input::get('kerjasamaId');

        $parameter = new Parameter;
        $parameter->Quality = Input::get('quality');
        $parameter->Price = Input::get('price');
        $parameter->Service = Input::get('services');
        $parameter->Delivery = Input::get('delivery');
        $parameter->Policy = Input::get('policy');
        $parameter->HSE = Input::get('hse');
        $parameter->updated_at = Carbon::now();
        $parameter->created_at = Carbon::now();
        // $parameter->status = 0;
        $parameter->kerjasama_id = $Idkerjasama;
        
        $parameter->save();

        $count1 = Input::get('persentasequality');
        $count2 = Input::get('persentasedelivery');
        $count3 = Input::get('persentaseservices');
        $count4 = Input::get('persentaseprice');
        $count5 = Input::get('persentasehse');
        $count6 = Input::get('persentasepolicy');    


        $average = ($parameter->Quality * $count1 + $parameter->Price * $count4 + $parameter->Service * $count3 + $parameter->Delivery * $count2 +
        $parameter->Policy * $count6 + $parameter->HSE * $count5);
      

        $kerjasamaTable = DB::table('Kerjasama')->where('id', $Idkerjasama)->update(['ratarata' => $average]);

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

            $kerjasamaDetail = DB::table('Kerjasama')->get();
        }

        $kerjasamaDetail = DB::table('Kerjasama')->where('status',1)->get();
        for ($i=0; $i < count($kerjasamaDetail) ; $i++) { 
                $decision[$i] = DB::table('Kerjasama')->where('id', $kerjasamaDetail[$i]->id)->pluck('ratarata')->first();
                   }

        return view::make('tables', compact('customerNames', 'vendorNames', 'kerjasamaDetail', 'decision'));
    }

        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $idKerjasama = Input::get('kerjasamaId');

        $vendorId = DB::table('Kerjasama')->where('id', $idKerjasama)->pluck('vendor_id');
        $nameVendor = DB::table('vendor')->where('id', $vendorId)->pluck('name')->first();
        
        $parameterId = DB::table('Parameter')->where('kerjasama_id',$idKerjasama)->pluck('id')->first();
        //dd($parameterId);
        $detailParameter = DB::table('Parameter')->where('id', $parameterId)->first();
       // dd($detailParameter);


        if($detailParameter != null)
        {
            //dd($userDB);
            return view::make('editparametervendor',compact('idKerjasama','detailParameter','nameVendor'));
        }
        
        
        else {

            return redirect()->route('tables');

         }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $idKerjasama = Input::get('kerjasamaId');
        $dataKerjasama = DB::table('Kerjasama')->where('status',1)->get();
        $vendorNames = [];
        $customerNames = [];
        $kerjasamaDetail = [];
        $decision = [];

        $vendorId = DB::table('Kerjasama')->where('id', $idKerjasama)->pluck('vendor_id');
        $nameVendor = DB::table('Vendor')->where('id', $vendorId)->pluck('name');

        for ($i=0; $i < count($dataKerjasama); $i++) { 
            $nameCustomer = DB::table('Customer')->where('id', $dataKerjasama[$i]->customer_id)->pluck('name')->first();
            $nameVendor = DB::table('Vendor')->where('id', $dataKerjasama[$i]->vendor_id)->pluck('name')->first();

            $customerNames[$i] = $nameCustomer;
            $vendorNames[$i] = $nameVendor;
        };

        $qualityUpdate = Input::get('qualityUpdate');
        $priceUpdate = Input::get('priceUpdate');
        $hseUpdate = Input::get('hseUpdate');
        $serviceUpdate = Input::get('serviceUpdate');
        $policyUpdate = Input::get('policyUpdate');
        $deliveryUpdate = Input::get('deliveryUpdate');

        $count1 = Input::get('persentasequality');
        $count2 = Input::get('persentasedelivery');
        $count3 = Input::get('persentaseservices');
        $count4 = Input::get('persentaseprice');
        $count5 = Input::get('persentasehse');
        $count6 = Input::get('persentasepolicy');

        $average = ($qualityUpdate * $count1 + $priceUpdate * $count4 + $serviceUpdate * $count3 + $deliveryUpdate * $count2 +
        $policyUpdate * $count6 + $hseUpdate * $count5);

        $kerjasamaTable = DB::table('Kerjasama')->where('id', $idKerjasama)->update(['ratarata' => $average]);
        $parameterTableId = DB::table('Parameter')->where('kerjasama_id', $idKerjasama)->pluck('id');
        $parameterTable = DB::table('Parameter')->where('id', $parameterTableId)->update(['Quality' => $qualityUpdate, 'Price' => $priceUpdate, 'Service' => $serviceUpdate, 'Delivery' => $deliveryUpdate, 'Policy' => $policyUpdate, 'HSE' => $hseUpdate]);

        $kerjasamaDetail = DB::table('Kerjasama')->where('status',1)->get();
        for ($i=0; $i < count($kerjasamaDetail) ; $i++) { 
                $decision[$i] = DB::table('Kerjasama')->where('id', $kerjasamaDetail[$i]->id)->pluck('ratarata')->first();
            
        }
        return view::make('tables',compact('idKerjasama','vendorNames', 'decision', 'customerNames', 'kerjasamaDetail'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $idKerjasama = Input::get('kerjasamaId');
        $deletekerjasama = DB::table('Kerjasama')->where('id', $idKerjasama)->update(['status' => 0]);

        //dd("Berhasil update");
         return redirect()->route('tables', compact('deletekerjasama'));
    }
}
