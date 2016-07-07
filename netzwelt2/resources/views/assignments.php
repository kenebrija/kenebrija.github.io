<!DOCTYPE html>
<html>
<head>
	<title>Project Assignments</title>
	<meta name="_token" content="{!! csrf_token() !!}" />
	<link rel="stylesheet" type="text/css" href="/css/assignments.css">
	<link rel="stylesheet" type="text/css" href="/css/master.css">
	<meta name="_token" content="{!! csrf_token() !!}"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
</head>
<body>
	<div class="navbar">
		<img src="/header.png">
		<!--h1> Welcome, {{ Auth::user()->first_name }}!</h1-->
		<h1> Welcome, User!</h1>
		<div class="menu">
			<a  class="btn1">Logout</a>
			<a  class="btn1">Home</a>	
		</div>
	</div>	
	
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> 
	<script src="<?= asset('/app.js') ?>"></script>
    <script src="<?= asset('/controllers/projects.js') ?>"></script>
</body>
</html>

