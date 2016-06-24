@extends('master')

@section('title')
	<title> Create Project</title>

@endsection


@section('page-stylesheet')

	{{ Html::style('css/newproject.css') }}
@endsection

@section('content')

<div class="projectForm">
{{ Form::open(array('url' => 'projects/create')) }}	
		<h2> Create New Project</h2>
		
	
			<label> Code</label>
			<input type="text" name="p_code" required> 
		
	
			<label> Project Name</label>
			<input type="text" name="p_name" required> 
		
			<label> Budget</label>
			<input type="text" name="p_budget" required> 
		
			<label> Remarks</label>
			<textarea name="p_remarks" rows="4" cols="22" required></textarea>
	
		<button type="submit" class="btn1">Submit</button>
	
		{{ Form:: close() }}
	
</div>
@endsection
