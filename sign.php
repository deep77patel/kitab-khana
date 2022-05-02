<?php
include("connection.php");
error_reporting(0);
session_start();

?>

<html>
<head>
	<title>sign up</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="signup-box">
	<img src="images.png" class="images">
	<h1>Signup here</h1>

	<form action="" method="GET">
		<p id="name">Enter your name</p>
		<input type="text" name="name" placeholder="Name"  value=""/>
		<p>Enter your Address</p>
		<input type="text" name="add" placeholder="Address" value=""/>
		<p>Enter your Mobile No</p>
		<input type="text" name="mobile" placeholder="Number"value=""/>
		<p>Enter your Email ID</p>
		<input type="Email" name="username" placeholder="Email"value=""/>
		<p>Enter your Password</p>
		<input type="password" name="password" placeholder="password"value=""/>
		<p>Confirm your password</p>
		<input type="password" name="password1" placeholder="password"value=""/>
		<input id="in" type="submit" name="signup" value="Sign Up"/>
		

		
		<!-- <a href="#">Forget Password</a> -->
		
	</form>
<javascript>
<?php
	if(isset($_GET['signup']))
{
	$na = $_GET['name'];
	$em =$_GET['username'];
	$pa = $_GET['password'];
	$cp = $_GET['password1'];
	$ad= $_GET['add'];
	$mn= $_GET['mobile'];

	$query2="SELECT Email FROM reg WHERE EMAIL='$em'";
	$q2= mysqli_query($con,$query2);
	$t2 = mysqli_num_rows($q2);
	$len= strlen($mn);
	if($t2 != 0)
	{
		echo "User Already Exist! Please try with different email. ";
	}
	else{
		if($len != 10)
		{
			echo "Please enter valid mobile number.";
		}
		else
		{
			if($pa != $cp)
			{
				echo "Enter Same Password";
			}
			else{
			$quary = "INSERT INTO reg VALUES ('$na','$em','$pa','$ad','$mn')";
			$sign= mysqli_query($con,$quary);
			header('location:login.php');
		}
		}
	}

}
?>
</javascript>



</body>
</html>