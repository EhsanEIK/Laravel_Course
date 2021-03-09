<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestSessionController extends Controller
{
    public function Set()
    {
    	Session::put('name','Ehsan');
    	Session::put('email','ehsankhan@gmail.com');
    }

    public function Get()
    {
    	echo Session::get('name','Defaulut Name');
    	echo "<br/>";
    	echo Session::get('email','Defaulut Email');
    }

    public function Destroy()
    {
    	Session::flush();
    }

    public function Forget()
    {
    	Session::forget('email');
    }

    public function Check()
    {
    	if(Session::Has('name'))
    	{
    		echo "Name is ".Session::get('name');
    	}
    	
    }
}

