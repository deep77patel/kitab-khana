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
		
		<p>Enter your new password</p>
		<input type="text" name="n_pass" placeholder="Password"/>
		<p>Confirm your new password</p>
		<input type="text" name="cp" placeholder="Confirm Password"/>
		
		<input id="in" type="submit" name="update" value="Update"/>
		

		
		<!-- <a href="#">Forget Password</a> -->
		
	</form>

<?php
	if(isset($_GET['update']))
{

	$np = $_GET['n_pass'];
	$em=$_SESSION['USER'];
	$cp = $_GET['cp'];

	if($np != $cp)
		{
			echo "Enter Same Password";
		}
		else{

		$query2="UPDATE reg SET password='$np' WHERE Email='$em'";
		$q2= mysqli_query($con,$query2);
		header('location:login.php');

		}
	
}
?>



</body>
</html>