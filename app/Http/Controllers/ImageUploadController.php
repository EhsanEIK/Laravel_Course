<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function Index()
    {
    	return view('Upload.Image');
    }

    public function Store(Request $request)
    {
    	$path = $request->file('image')->store('images','public');

    	return $path;
    }

    public function Show()
    {
    	$url=Storage::Url('images/Pi5iYzVY2QgFrWvoVxMbRFmvCzJyRnpWqO3OX6P2.jpg');

    	echo "<img src='$url'>";
    }

    public function Delete()
    {
    	Storage::disk('public')->delete('images/Pi5iYzVY2QgFrWvoVxMbRFmvCzJyRnpWqO3OX6P2.jpg');
    }
}
