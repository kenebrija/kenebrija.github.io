<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	{{ Html::style('css/master.css') }}
	<meta name="_token" content="{!! csrf_token() !!}"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
	@yield('page-stylesheet')
    @yield('title')
    
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
		@yield('content')
	</div>
</body>
</html>