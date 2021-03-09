<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Customer;
use App\Post;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    public function Index(){
    	// $data=DB::table('customer')
				 //    ->orderBy('id', 'DESC')
				 //    ->get();	

    	// //var_dump($data);

    	#For Insert
    	//$data=Customer::insert([
		// 'name'=>'Jishan',
		// 'email'=>"jishan@gmail.com",
		// 'age'=>20
		// ]);
		// return $data;

		#For Update
		// $data=Customer::find(5)->update([
		// 'name'=>'Jishan',
		// 'email'=>"jishan@gmail.com",
		// 'age'=>20
		// ]);
		// return $data;

		$customers= Customer::all();
		return view('Customer.index', ['customers'=>$customers]);
    }

    public function create(){
    	return view('customer.form');
    }

    public function store(CustomerRequest $request){
    	//$data=$request->all();
    	// $request->validate([
    	// 	'name'=>'required',
    	// ]);
    	return $request->all();
    }
}
