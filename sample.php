<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email =$_POST['email'];
	$password =$_POST['password'];

	$valid_email="admin@example.com";
	$valid_password="password123";
	if($email==$valid_email && $password == $valid_password){
		echo"<h2>Login Successful!</h2>";
	}else{
		echo"<h2>invalid Email or Password<h2>";
	}

}

?>