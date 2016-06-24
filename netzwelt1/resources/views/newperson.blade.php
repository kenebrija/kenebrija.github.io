@extends('master')

@section('title')
	<title> Create Person</title>

@endsection


@section('page-stylesheet')

	{{ Html::style('css/newproject.css') }}
@endsection

@section('content')

<div class="projectForm">
	{{ Form::open(array('url' => 'persons/create')) }}	
		<h2> Create New Person</h2>
		
	
			<label> Last Name</label>
			<input type="text" name="last_name" required> 
		
	
			<label> First Name</label>
			<input type="text" name="first_name" required> 
		
			<label> Username </label>
			<input type="email" name="username" required> 
		
			<label> Password</label>
			<input type="password" name="password" required>
	
		<button type="submit" class="btn1">Submit</button>
	
		{{ Form:: close() }}
	
</div>
@endsection
