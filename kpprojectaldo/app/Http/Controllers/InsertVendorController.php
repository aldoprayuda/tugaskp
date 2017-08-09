<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vendor;
use Log;

use DB;
use View;

use Illuminate\Support\Facades\Input;


class InsertVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = new Vendor;
        $user->name = Input::get('name');
        $user->phone = Input::get('phone');
        $user->address = Input::get('address');
        $user->email = Input::get('email');
        $user->category = Input::get('category');
        $user->status = Input::get('status');
        $user->save();

        $users = DB::table('Vendor')->where('status', '=', 1)->get();

        return redirect()->route('vendorlist',compact('users'));
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
        DB::table('Vendor')
            ->where('id', $id)
            ->update(['status' => 0]);

        $users = DB::table('Vendor')->where('status', '=', 1)->get();

        return redirect()->route('vendorlist',compact('users'));

        
    }
    
}
