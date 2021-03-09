<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegistrationController extends Controller
{
    public function Index()
    {
    	return view('Auth.registration');
    }

    public function Register(Request $request)
    {
    	$data=$request->only(['name','email','age']);
    	$data['password']= Hash::make($request->get('password'));

    	User::create($data);

    	return "Registration Successfull";

    }
}
