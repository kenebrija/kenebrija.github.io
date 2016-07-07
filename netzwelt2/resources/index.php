<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	{{ Html::style('css/master.css') }}
	<meta name="_token" content="{!! csrf_token() !!}"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       

    
</head>
<body>
	<div class="navbar">
		<img src="{{ asset('header.png') }}">
		<h1> Welcome, {{ Auth::user()->first_name }}!</h1>
		<div class="menu">
			<a href="{{ URL::to('logout') }}" class="btn1">Logout</a>
			<a href="{{ URL::to('projects') }}" class="btn1">Home</a>	
		</div>
	</div>	
	<div class="container">
		Hello
	</div>
</body>
</html>