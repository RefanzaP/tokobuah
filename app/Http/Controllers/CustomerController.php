<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller{
    function index(){
      //  echo "asoy geboy";
      $customer = Customer::get(['customer_id','name','address']);
     // var_dump($customer);
    return view('customer.index',compact('customer'));

}
function create(){
    return view('customer.create');
}
function store (Request $request){
   // echo "jatimiko";
    $txtId = $request->input('txt_Id');
    $txtName = $request -> input('txt_Name');
    $txtAddress = $request->input('txt_Address');
    echo $txtId."<br/> ".$txtName."<br/> ".$txtAddress;

    Customer::create([
        'customer_id' => $txtId,
        'name' => $txtName,
        'address' => $txtAddress
    ]);
    return redirect ('/Customer');
}
public function show($id){

    //$customer = Customer::where('customer_id',$id);
    //var_dump($customer);
    return view('customer/show',['customer'=> Customer::where('customer_id',$id)]);
}
}
