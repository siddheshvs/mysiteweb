<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title> Login Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="login-container">
		<h2>Login</h2>
		<form action="index.php" method="POST">
		<input type="email" name="email" placeholder="Enter Email" required>
		<input type="password" name="password" placeholder="Enter Password" required>
		<button type="submit">Login</button>
		</form>
	</div>
</body>
</html>