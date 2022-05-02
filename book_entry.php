<?php
include("connection.php");

$code = "01";
$name = "Pro Java Programming";
$qui = "20";
$pri="795";
$q1= "INSERT INTO NAMES VALUES('$code','$name','$qui','$pri')";
mysqli_query($con,$q1);


$code = "02";
$name = "Elements of Mechanical Engineering";
$qui = "20";
$pri="900";
$q2= "INSERT INTO NAMES VALUES('$code','$name','$qui','$pri')";
mysqli_query($con,$q2);

$code = "03";
$name = "Automobile Engineering";
$qui = "20";
$pri="716";
$q3= "INSERT INTO NAMES VALUES('$code','$name','$qui','$pri')";
mysqli_query($con,$q3);

$code = "04";
$name = "Chemical Engineering";
$qui = "20";
$pri="5004";
$q4= "INSERT INTO NAMES VALUES('$code','$name','$qui','$pri')";
mysqli_query($con,$q4);

$code = "05";
$name = "Electrical And Electronics Engineering";
$qui = "20";
$pri="240";
$q5= "INSERT INTO NAMES VALUES('$code','$name','$qui','$pri')";
 mysqli_query($con,$q5);

 $code = "06";
$name = "Analog and Digital Communications Engineering";
$qui = "20";
$pri="529";
$q6= "INSERT INTO NAMES VALUES('$code','$name','$qui','$pri')";
 mysqli_query($con,$q6);












































?>

