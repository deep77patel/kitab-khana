<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
</head>
<body>
 

<form action="" method="GET">

username<input type="text" name="username" vlaue=""><br><br>
Email_ID<input type="char" name="email" vlaue=""><br><br>
Password<input type="char" name="pass" vlaue=""><br><br>
Confirm Password<input type="char" name="cpass" vlaue=""><br><br>
Mobile No<input type="text" name="no" vlaue=""><br><br>
<input type="submit" name="bo" value="Submt">

</form>
<?php
$un= $_GET['username'];
$em= $_GET['email'];
$p= $_GET['pass'];
$cp= $_GET['cpass'];
$mn= $_GET['no'];

$query="INSERT INTO SIGNUP VALUES ('$un','$em','$p','$cp','$mn')";
$data=mysqli_query($con,$query);

?>

</body>
</html>