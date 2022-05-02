<?php
include("connection.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>purchase details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
		<style type="text/css">
	/*#container{
		opacity: 0.5;
	}*/
		body{
			background: url(novel.jpeg);
			background-size: cover;
		
		}
	#stylebook1{
		color: black;
		text-underline-position: center;
		text-align: center;
		/*opacity: 0.5;*/
	}
table#t01 {
    width: 100%;    
   background-color: #f1f1c1;
}
td
{
	padding:5px;
}
</style>
</head>
<body>
 <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" data-prevent=""><font size='4' color="red">Logout</font></a></li>
        
       	</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="User_Home.php" data-prevent=""><font size='4'>Home</font></a></li>
       
	</ul>
	<div class="container">
		 
		<h1 id= "stylebook1">Purchase Details</h1>
		<form class="bright">
		<div class="jumbotron">
			<div class="row">


	<table id="t01">
	
		<tr>
			<th>Order ID</th>
			<th>Product Name</th>
			<th>Price</th>
		</tr>
		<?php
		session_start();
		$uid = $_SESSION['USER'];
		$sql = "SELECT oid, pid FROM orders where uid='".$uid."'";
		$result = $con->query($sql);
		while($row = $result->fetch_assoc()) {
				$sql = "select b_name,price from product where b_id=".$row["pid"];
				//echo '<script language="javascript">alert('.$sql.')</script>';
				$result1 = $con->query($sql);
				$name = $result1->fetch_assoc();
        			echo "<tr>
					<td>". $row['oid']."</td>
					<td>".$name["b_name"]."</td>
					<td>".$name["price"]."</td>
					<td> <a href=delete.php?rn=$row[oid]> Delete </a> </td>
					 </tr>";
    			}
		?>
</table>
<form action="" method="GET">
<div class="container">
 	<input id="in" type="submit" class="btn btn-secondary pull-right" name="order" value="Confirm Order"/>
</div>
</form>

<?php
	if(isset($_GET['order']))
	{
		echo '<script language="javascript">alert("Your order placed sucessfully") </script>';
		$subject='Kitab-Khana';
		$message='Hi $uid. Thanks for shopping with us. We will inform you further when your order will placed.Visit again!';
		$headers="From : The sender Name <vaghaniravi16@gmail.com>\r\n";
		$headers.="Reply-To: vaghaniravi16@gmail.com\r\n";
		$headers.="Content-type: text/html\r\n";
		$m=mail($uid,$subject,$message,$headers);
			
	}
	
?>

		</div>
		  	</div>
</form>

</body>
</html>