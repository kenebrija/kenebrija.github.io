<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    
	<title>Login</title>
	{{ Html::style('css/login.css') }}

</head>
<body>
	<div class="container">
		<div class="logo">
			<img src="logo.png">
		</div>
		<div class="login">
			{{ Form::open(array('url' => 'login')) }}
			<input type="email" name="username" placeholder=" Email Address">
			<input type="password" name="password" placeholder=" Password">
			<button type="submit">Login </button>
			{{ Form:: close() }}
		</div>
	</div>

	
</body>
</html>