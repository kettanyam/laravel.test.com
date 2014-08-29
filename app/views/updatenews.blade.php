<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Message Board</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
		h2 {
			font-size: 24px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
		

		
		@foreach($newscontent as $con)
		<h2>Here's the old message: <br>{{ $con -> newscontent}}</h2>
		@endforeach
		<form action="{{$home_url}}/updatednews/{{ $con -> newsid}}" method="post">
			<h1>Enter the new News!</h1><br><input type="text" name="thenews">
			<input type="submit" value="Check!">
		</form>
	</div>
</body>
</html>