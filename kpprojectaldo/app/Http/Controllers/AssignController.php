<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use View;
use Illuminate\Support\Facades\Input;

class AssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('Customer')->where('status', '=', 1)->get();

        if(count($users) > 0)
        {

            return view::make('assign',compact('users'));
        }
        else
        {   $users = [];
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $arrayVendorId)
    {
        $users = DB::table('Customer')->where('id', '=', $id)->get();
        // $customer = DB::table('Customer')->where('id', '=', $id)->get();
        // for ($i=0; $i < $arrayVendorId.size; $i++) { 
            
        
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