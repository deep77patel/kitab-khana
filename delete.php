<?php
include("connection.php");
$id=$_GET['rn'];
$query="delete from orders where oid='$id'";
$data = mysqli_query($con,$query);

if($data)
{
	header('location:purchase.php');
}
else


?>