<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Index()
    {
    	return view('Auth.login');
    }

    public function Login(Request $request)
    {
    	$data = $request->only ('email', 'password');

    	if (Auth::attempt($data))
    	{
    		return redirect()->intended('/admin');
    	}
    	else
    	{
    		//return $data;
    		return redirect()->to('/login');
    	}
    	//return "login successful";
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->to('/login');
    }
}
