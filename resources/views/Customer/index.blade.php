@extends('Layout.app')

@section('title','This is customer page')

@section('content')

<p>
	<label>Name:</label> {{$customers[0]->name}} <br>
	<label>E-mail:</label> {{$customers[0]->email}} <br>
	<label>Age:</label> {{$customers[0]->age}} <br>
</p>

@endsection