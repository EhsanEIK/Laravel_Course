<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\User;

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
    return view('welcome');
});

Route::get('about','HomeController@Index');
Route::get('customer','CustomerController@Index');
	
Route::get('post',function(){
	// $data=App\Post::insert([
	// 	'title'=>'Post4',
	// 	'description'=>"Lorem Ispum",
	// 	'status'=>1
	// ]);

	$data=Post::findorfail(50);

	return $data;
});



//Middleware
Route::middleware('test')->group(function(){

	Route::get('one', function(){
	return "This is first page";
	});
	Route::get('two', function(){
		return "This is second page";
	});
});

Route::get('three', function(){
		return "This is third page";
})->middleware('test');



Route::get('user/create', 'CustomerController@create');
Route::post('user/store', 'CustomerController@store');



//Check Auth and Create Registration & Login form
Route::get('registration', 'Auth\RegistrationController@Index');
Route::post('registration', 'Auth\RegistrationController@Register');
Route::get('login', 'Auth\LoginController@Index')->name('login');
Route::post('login', 'Auth\LoginController@Login');
Route::get('logout', 'Auth\LoginController@Logout');

Route::get('test', function(){

	if (Auth::check()){
		return Auth::user();
	}
	else{
		return "Please log in.";
	}
});

Route::middleware('auth')->group(function(){

	Route::get('admin', function(){
		echo "Welcome to admin = ";
		return Auth::user()->name;
	});

	Route::get('dashboard', function(){
		return "Welcome to dashboard";
	});

	Route::get('post', function(){
		return "Welcome to post";
	});

});




//Session
Route::get('session/set','TestSessionController@set');
Route::get('session/get','TestSessionController@get');
Route::get('session/destroy','TestSessionController@destroy');
Route::get('session/forget','TestSessionController@forget');
Route::get('session/check','TestSessionController@check');



//Image Upload
Route::get('image','ImageUploadController@Index');
Route::post('image/upload','ImageUploadController@Store');
Route::get('image/show','ImageUploadController@Show');
Route::get('image/delete','ImageUploadController@Delete');