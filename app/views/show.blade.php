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

		.newest {
			positin: absolute;
			left: 50%;
			top: 50%;
			color: #877;
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
	<div class="newest">


		<h1>Which you HAVE TO know......</h1>
		@foreach($news as $new)
		<h1>{{ $new->newscontent}}</h1>
		<br>
		<h4>Realese at: {{ $new->newsid}}</h4>
		@endforeach
		<a href="{{$home_url}}/newsupdate">uUPATEe</a>
		<h6>Rare</h6>
	</div>

	<div class="welcome">
		

		<h1>Leave a message now!</h1>
		<a href="{{$home_url}}/create">CREATE</a>
		<br>
		@foreach($content as $con)
		<h2>{{ $con -> username}} says: <br> {{ $con -> content}} <br> At {{ $con -> mbid}}</h2>
		<a href="{{$home_url}}/update/{{ $con -> mbid}}">UPDATE</a>
		&nbsp&nbsp
		<a href="{{$home_url}}/delete/{{ $con -> mbid}}">DELETE</a>
		@endforeach
	</div>
</body>
</html>