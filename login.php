<?php
include("connection.php");
error_reporting(0);


	
?>

<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="login-box">
	<img src="images.png" class="images">
	<h1>Login here</h1>
	<form action="" method="GET">
		<p>Email</p>
		<input type="Email" name="username" placeholder="Email" value=""/>
		<p>Password</p>
		<input type="password" name="password" placeholder="password" value=""/>
		<p><a href="forgot.php"><u>Forgot Password?</u></a></p>
		<input id="in" type="submit" name="login" value="Login"/>
		<!-- <a href="#">Forget Password</a> -->

		<p id="or">-----------------------OR-----------------------</p>

		<!-- <input action="get" id="in1" type="submit" name="submit" value="Sign Up"> -->
		  <a class="btn btn-success btn-lg " href="sign.php" role="button">Sign up</a>
	</form>
	</div>
	
<?php

if(isset($_GET['login']))
	{
		session_start();

		$em =$_GET['username'];
		$pa=$_GET['password'];
		$_SESSION['USER']=$em;
		$query1 = "SELECT * FROM reg WHERE Email='$em' AND Password='$pa'";
		$q= mysqli_query($con,$query1);
		$q1= mysqli_num_rows($q);
		if($q1!=0)
		{
			header('location:User_Home.php');
		}
		else
		{	
			echo "Enter valid username or password";
		}

	}


?>
</body>
</html>