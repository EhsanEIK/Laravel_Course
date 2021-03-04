<?php

use Illuminate\Support\Facades\Route;
use App\Post;

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
