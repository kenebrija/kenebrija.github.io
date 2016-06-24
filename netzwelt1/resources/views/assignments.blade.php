@extends('master')

@section('title')
	<title> Project Assignments</title>

@endsection


@section('page-stylesheet')
	<meta name="_token" content="{!! csrf_token() !!}" />
	{{ Html::style('css/assignments.css') }}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   

    <script src="{{asset('js/ajax.js')}}"></script>	

@endsection

@section('content')

<div class="wrapper wrappercenter">
	 <?php 
	foreach($projects as $projects){
			echo "<h2> Project Assignments: $projects->p_name </h2>";
			echo "<input type='hidden' id='projects' value='$projects->id'> ";
	}
	?>
	<div class="addPerson">
		<h3> New Member: </h3>
		<div class="select">
			<select id="user" name="user">
				<?php
					$arr = array();
					foreach ($project_assignments as $person) {
						array_push($arr,$person->first_name);
					}

					
					foreach ($users as $users) {
						if (!in_array($users->first_name, $arr)) {
						    echo "<option value='$users->id'>$users->first_name</option>";
						}
						
					}
				?>
			</select>
			<button  type="submit" id="btn-save" class="btn1">Add</button>
		</div>
	</div>

	<div class="currentMembers">
		<h4> Current Members: </h4>
		
		<ul id="add" name="add">
			@foreach ($project_assignments as $assigned)
				 <li class="members" id='{{$assigned->pid}}' value="{{$assigned->first_name}}"> 
				 	{{$assigned->first_name}}  
				 	<button class="remove1 btn1" id='{{$assigned->first_name}}' value='{{$assigned->pid}}'> Remove </button>	
				 	<input type="hidden" id="id" value="{{$assigned->id}}">		 
				 </li>
			@endforeach
		</ul>
	
	

	</div>
</div>
@endsection


