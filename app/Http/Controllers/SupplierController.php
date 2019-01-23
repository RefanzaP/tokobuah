<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Supplier;
class SupplierController extends Controller{
    function index(){
      //  echo "asoy geboy";
      $supplier = Supplier::get(['Supplier_id','Supplier_name','Supplier_address']);
     // var_dump($customer);
    return view('supplier.index',compact('supplier'));

}
function create(){
    return view('supplier.create');
}
function store (Request $request){
   // echo "jatimiko";
    $txtId = $request->input('txt_Id');
    $txtName = $request -> input('txt_Name');
    $txtAddress = $request->input('txt_Address');
    echo $txtId."<br/> ".$txtName."<br/> ".$txtAddress;

    Supplier::create([
        'Supplier_id' => $txtId,
        'Supplier_name' => $txtName,
        'Supplier_address' => $txtAddress
    ]);
    return redirect ('/Supplier');
}

}
