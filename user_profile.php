<?php
include("connection.php");

session_start();
$em=$_SESSION['USER'];
$query="SELECT * FROM reg where Email='$em'";
$q2= mysqli_query($con,$query);
if (mysqli_num_rows($q2) > 0) {
    while($row = mysqli_fetch_assoc($q2)) {
        $name = $row["Name"];
        $email = $row["Email"];
        $add = $row["address"];
        $mob = $row["mobile"];
    }
} else {
    echo "0 results";
}

?>
<html>
<head>
	<title>Your Profile</title>


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
		opacity: 0.5;
	}
	#change{
		text-align: center;
		top: 50%;
		left:50%;
		/*position:absolute;*/
	/*transform:translate(-500%,-100%);
	box-sizing:border-box;*/
	}

	</style>
</head>
<body>
	<div class="container">
		 <div class="jumbotron">
		<h1 id="stylebook1">Check your Profile!</h1>
<form class="bright">
	<!-- Name -->
	 <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text-muted" class="form-control" value="<?php echo $name;  ?>" id="exampleOutputName" aria-describedby="emailHelp" disabled="true">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

<!-- address -->
 <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text-muted" class="form-control" value="<?php echo $add;  ?>" id="exampleExample" aria-describedby="emailHelp" disabled="true">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <!-- mobile -->
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="text-muted" class="form-control"  value="<?php echo $mob;  ?>" id="exampleMobile" aria-describedby="emailHelp" disabled="true">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>



    <!-- EMAIL SUBMISSION -->

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email;  ?>" aria-describedby="emailHelp" disabled="true">
   <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
<!-- password reset -->


<div class="container">
      <!-- <h1>Hello World!</h1> -->
      <!-- 	 -->
      <!-- <button class="btn " disabled type="button" name="button">Disabled Button</button> -->
      <p class="lead">
    <a class="btn btn-success active " href="changepass.php" role="button">Change Password</a>
  </p>
    </div>

</form>
</div>
</div>
</body>
</html> 