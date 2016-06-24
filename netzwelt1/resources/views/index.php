<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	{{ Html::style('css/master.css') }}
	{{ Html::style('css/newproject.css') }}
	<meta name="_token" content="{!! csrf_token() !!}"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> 
    
    <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
    <script src="js/services/projectService.js"></script> <!-- load our service -->
    <script src="js/app.js"></script>
</head>
<body ng-app="projectApp" ng-controller="mainController">
	<div class="navbar">
		<img src="{{ asset('header.png') }}">
		<h1> Welcome, {{ Auth::user()->first_name }}!</h1>
		<div class="menu">
			<a href="{{ URL::to('logout') }}" class="btn1">Logout</a>
			<a href="{{ URL::to('projects') }}" class="btn1">Home</a>	
		</div>
	</div>	
	<div class="container">
		<div class="projectForm">
		
		<form ng-submit="submitProject()">
				<h2> Create New Project</h2>
				
			
					<label> Code</label>
					<input type="text" name="p_code" ng-model="projectData.p_code" required> 
				
			
					<label> Project Name</label>
					<input type="text" name="p_name" ng-model="projectData.p_name" required> 
				
					<label> Budget</label>
					<input type="text" name="p_budget" ng-model="projectData.p_budget" required> 
				
					<label> Remarks</label>
					<textarea name="p_remarks" rows="4" cols="22" ng-model="projectData.p_remarks" required></textarea>
			
				<button type="submit" class="btn1">Submit</button>
			
			
		</div>
	</div>
</body>
</html>