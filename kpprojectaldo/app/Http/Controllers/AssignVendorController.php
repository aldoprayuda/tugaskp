<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use View;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use App\Kerjasama;

class AssignVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $customerId;

    public function index()
    {
        $users = DB::table('Vendor')->where('status', '=', 1)->get();

        if(count($users) > 0)
        {

            return view::make('assignvendor',compact('users'));
        }
        else
        {
            $users = [];
            return view('assign',compact('users'));
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
        $arrayVendorId = Input::get('assign');
        $custId = Input::get('customerId');
        for ($i=0; $i < count($arrayVendorId) ; $i++) {
            $kerjaSama = new Kerjasama;
            $kerjaSama->awal_mulai = Carbon::now();
            $kerjaSama->vendor_id = $arrayVendorId[$i];
            $kerjaSama->customer_id = $custId;
            $kerjaSama->save();
        }

        return redirect()->action('TablesController@show', ['customerId' => $custId]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = DB::table('Vendor')->where('id', '=', $id)->get();
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

    public function assignVendor(){
        $custId = Input::get('custId');
        $users = DB::table('Vendor')->where('status', '=', 1)->get();
        return view::make('assignvendor', compact('users','custId'));
    }
}
