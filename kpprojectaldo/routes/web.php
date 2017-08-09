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
	$message = null;
    return view('login', ['message' => $message]);
});
Route::get('/introduction', function () {
    return view('introduction');
});

Route::get('/home', 'HomeController@index');

Route::post('/insert', 'InsertCustomerController@store');

Route::post('/insertv', 'InsertVendorController@store');

Route::get('/listcustomer', 'ListCustomerController@index')->name('listcustomer');

Route::get('/assign', 'AssignController@index');

Route::get('/assignvendor', 'AssignVendorController@index');

Route::get('/profilecustomer', 'ProfileCustomerController@index');

Route::delete('/deletecustomer/{customerId}', 'InsertCustomerController@destroy');

Route::delete('/deletevendor/{vendorId}', 'InsertVendorController@destroy');

Route::get('/tables', 'TablesController@index')->name('tables');

Route::post('/tables', 'TablesController@store');

Route::post('/tablesDetail', 'AccController@index');

Route::get('/database/{customerId}', 'DatabaseController@show'); 

Route::get('/listvendor', 'ListVendorController@index')->name('vendorlist');

Route::get('/parametervendor', 'ParameterVendor@index');

Route::post('/parametervendor', 'ParameterVendor@store');

Route::get('/profilevendor', 'ProfileVendorController@index');   

Route::get('/morris', 'MorrisController@index');

Route::post('/assignvendor', 'AssignVendorController@assignVendor');

Route::post('/assignvendor/doAssign', 'AssignVendorController@store');

Route::get('/detailkerjasama', 'DetailKerjaSamaController@index');

Route::get('/editparametervendor', 'ParameterVendor@show');

Route::post('/updateparametervendor', 'ParameterVendor@update');

Route::post('/deletekerjasama', 'ParameterVendor@destroy');

Route::post('/morrisShowGraph', 'MorrisController@show');

Route::get('/homehome', 'HomeHomeController@index')->name('homehome');

Route::post('/login', 'LoginController@login');

// Route::get('/registeruser', 'RegisterUserController@index');

// Route::post('/registeruser', 'RegisterUserController@store');

Route::resource('/registeruser', 'RegisterUserController');




