<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	@if(Session::has('error'))
	<p>{{Session::get('error')}}</p>
	@endif
	<p></p>
	{{Form::open(array('url'=>'account/login','method'=>'POST'))}}
	<input type="text" name="username" id="username"><br>
	<input type="text" name="password" id="password"><br>
	<button type="submit">Submit</button>
	{{Form::close()}}
</body>
</html>