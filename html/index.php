<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Where's Tom?</title>
	
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/index.css" type="text/css">
</head>
<body>
<div class="main-wrapper">
	<div class="login loginform">
		<form method="POST" action="/login">
			<a class="login-logo" href="/"><img src="img/wherestom-logo.png" alt="Where't Tom logo" class="login-logo"></a>
			<div class="email">
				<div>
					<input type="text" name="email" placeholder="email / username">
				</div>
			</div>
			<div class="password">
				<div>
					<input autocomplete="off" type="password" name="password" placeholder="password">
					<p class="error">Incorrect password</p>
				</div>
			</div>
			<div class="submit">
				<button class="login-button">Login</button>
			</div>
		</form>
	</div>
</div>
<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
<script src='/js/index.js'></script>
</body>
</html>
