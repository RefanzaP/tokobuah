<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo "WELCOME";
});
Route::get('/awww', function () {
    echo "selamat datang";
});
Route::get('/pohong', function () {
    return view ('telo');
});

Route::get('/home', function () {
    echo "WELCOME";
});
Route::get('/terong', 'CapungController@index');
Route ::get('/brokoli','CapungController@pujangga');
Route ::get('/brokoli/dewa','CapungController@city');

Route::get('/Customer','CustomerController@index');
//Route::get('/Supplier','SupplierController@index');
//Route::get('/Customer/create','CustomerController@create');
//Route::get('/Customer/store','CustomerController@store');
Route::resource('Supplier','SupplierController');
Route::resource('Customer','CustomerController');
Route::resource('Employee','EmployeeController');
