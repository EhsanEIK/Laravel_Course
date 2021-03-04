<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Customer;
use App\Post;

class CustomerController extends Controller
{
    public function Index(){
    	// $data=DB::table('customer')
				 //    ->orderBy('id', 'DESC')
				 //    ->get();	

    	// //var_dump($data);

    	#For Insert
  //   	$data=Customer::insert([
		// 'name'=>'Rifat',
		// 'email'=>"rifat@gmail.com",
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
}
