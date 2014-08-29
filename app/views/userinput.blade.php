<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Input Message</title>
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
		hello
		<form action="http://dev-kettan.yam.com/createcontent" method="post">
		<h1>Insert your name:</h1><input type="text" name="username"><br>
		<h1>Insert your message:</h1><input type="text" name="usermessage">
		<br>
		<input type="submit" value="Check!">
		</form>
	</div>
</body>
</html>
