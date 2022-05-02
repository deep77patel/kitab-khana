<?php

include("connection.php");
error_reporting(0);
session_start();
$em=$_SESSION['USER'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
		<style type="text/css">
	/*#container{
		opacity: 0.5;
	}*/
		body{
			background: url(novel.jpeg);
			background-size: cover;
		
		}
		/*.form-group{
			opacity:0.5;
		}
		#bright{
			opacity: 13;
		}*/

	#stylebook1{
		color: black;
		text-underline-position: center;
		text-align: center;
		/*opacity: 0.5;*/
	}
</style>
</head>
<body>
<div class="container">
		 
		<h1 id= "stylebook1">Change your password</h1>
		<form class="bright" action="" method="GET">
	<!-- recent password -->
	<div class="jumbotron">
	 <div class="form-group">
    <label for="exampleInputEmail1">Enter Current Password</label>
    <input type="password" class="form-control" id="exampleCurrentPassword" aria-describedby="emailHelp">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    <!-- new password -->
	 <div class="form-group">
    <label for="exampleInputEmail1">Enter New Password</label>
    <input type="password" name="n_pass" class="form-control" id="exampleNewPassword" aria-describedby="emailHelp">
    <!-- re-enter new password  -->
	 <div class="form-group">
    <label for="exampleInputEmail1">Re-enter Password</label>
    <input type="password" name="cp" class="form-control" id="exampleNewPassword" aria-describedby="emailHelp">
<br>
	<input id="in" type="submit" name="signup" value="Change Password"/>
</div>
  </div>
</form>
<javascript>
<?php
	if(isset($_GET['signup']))
{
	$np = $_GET['n_pass'];

	$cp = $_GET['cp'];

	if($np != $cp)
		{
			echo "Enter Same Password";
		}
		else{

		$query2="UPDATE reg SET password='$np' WHERE Email='$em'";
		$q2= mysqli_query($con,$query2);
		header('location:User_Home.php');

		}
	
}
?>
</javascript>
</body>
</html>