<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/introduction', function () {
    return view('introduction');
});

Route::get('/home', 'HomeController@index');

Route::post('/insert', 'InsertCustomerController@store');

Route::post('/insertv', 'InsertVendorController@store');

Route::get('/listcustomer', 'ListCustomerController@index');

Route::get('/assign', 'AssignController@index');

Route::get('/assignvendor', 'AssignVendorController@index');

Route::get('/profilecustomer', 'ProfileCustomerController@index');

Route::delete('/deletecustomer/{customerId}', 'InsertCustomerController@destroy');

Route::delete('/deletevendor/{vendorId}', 'InsertVendorController@destroy');

Route::get('/tables', 'TablesController@index'); 

// Route::get('/tablesDetail/{customerId}', 'TablesController@show'); 
Route::post('/tablesDetail', 'AccController@index');

Route::get('/database/{customerId}', 'DatabaseController@show'); 

Route::get('/listvendor', 'ListVendorController@index');

Route::get('/parametervendor', 'ParameterVendor@index');

Route::get('/profilevendor', 'ProfileVendorController@index');   

Route::get('/morris', 'MorrisController@index');

Route::post('/assignvendor', 'AssignVendorController@assignVendor');

Route::post('/assignvendor/doAssign', 'AssignVendorController@store');
