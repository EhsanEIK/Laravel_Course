<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){

    	$this->data['name']='Ehsan';
    	$this->data['roll']=17010116;
    	$this->data['subjects']=['Math','Computer','ICT'];

    	return View('Home.index', $this->data );
    }
}
