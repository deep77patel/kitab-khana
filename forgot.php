<?php
include("connection.php");
error_reporting(0);
session_start();

?>

<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="forgot.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="signup-box">
	<img src="images.png" class="images">
	<h1>Forgot Password</h1>

	<form action="" method="GET">
		
		<p>Enter your Email ID</p>
		<input type="Email" name="username" placeholder="Email"/>
		<p>Enter your Mobile No</p>
		<input type="text" name="mobile" placeholder="Number"/>
		
		<input id="in" type="submit" name="next" value="Next"/>		
	</form>

<?php

if(isset($_GET['next']))
	{

		
		$em =$_GET['username'];
		$mb=$_GET['mobile'];
		$_SESSION['USER']=$em;
		$query1 = "SELECT * FROM reg WHERE Email='$em' AND mobile='$mb'";
		$q= mysqli_query($con,$query1);
		$q1= mysqli_num_rows($q);
		if($q1!=0)
		{
			header('location:forgot1.php');
		}
		else
		{	
			echo "Enter valid Email or Mobile No.";
		}

	}


?>






</body>
</html>