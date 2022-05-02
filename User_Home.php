<?php
include("connection.php");
error_reporting(0);
session_start();
$quary="SELECT * FROM product";
$q2= mysqli_query($con,$quary);

	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		$uid = $_SESSION['USER'];
		$pid = $_GET['id'];
		$sql = "INSERT INTO orders values (DEFAULT,'".$pid."','".$uid."')";
		mysqli_query($con,$sql);
		echo '<script language="javascript">alert("inserted into cart successfully")</script>';
	}


?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="imageslider.css">
<link href="https://fonts.googleapis.com/css?family=Lobster|Noto+Serif" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

<style type="text/css">
  .nav2{
    margin-top:50px;
    margin-left: 20px;

  }
  .navbar-nav > li{
   /* padding-right: 30px;*/
    padding-left: 30px;
    /*margin-left: 30px;
    margin-right: 30px;
  */}
  #cart-1{
      padding: 0px;
  }

</style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="User_Home.php">
      <img src="bb.jpg" width="30" height="30">
    </a>
     <a class="navbar-brand" href="User_Home.php"><u>Kitab-Khana</u></a>
  

  <!-- Search bar-->
    <div class="navbar-collapse" id="searchbar">
     
      <ul class="nav navbar-nav navbar-right">
       
         <li><a href="index.php" data-prevent="">Logout</a></li>
      </ul>

      
<ul class="nav navbar-nav navbar-right">	
	  <li><a class="navbar-brand" href="" title="Start a new search">Search</a></li>
      </ul>
      
     
     
     
     <form class="navbar-form" method="GET">
        <div class="form-group" style="display:inline;">
          <div class="input-group" style="display:table;">
            <span class="input-group-addon" style="width:0.5%;"><a  href="#"><span class="glyphicon glyphicon-search"></span></a></span>
            <input class="form-control" name="search" placeholder="Search Here" autocomplete="off" autofocus="autofocus" type="text">

          </div>
        </div>
      </form>

    </div><!--/.nav-collapse -->
  </div>
</nav>


<!--Navbar 2-->


<nav class="navbar navbar-inverse nav2" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a class="navbar-brand" href="User_Home.php">Home</a>
        </li>
          <li role="separator" class="divider">
         <li role="separator" class="divider">
         
          <li class="dropdown">
            <a class="navbar-brand" href="login.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My orders<span class="caret"></span></a>
               <ul class="dropdown-menu">
              <li><a href="purchase.php">My cart</a></li>
              <li role="separator" class="divider"></li>
              <li role="separator" class="divider"></li>
              <li><a href="user_profile.php">Check your Profile</a></li>
               </ul>
              </li>
        
            <li class="dropdown">
              <a class="navbar-brand" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Departments<span class="caret"></span></a>
                 <ul class="dropdown-menu">
                    <li><a href="Engineering Books.php">Engineering Books</a></li>
                      <li role="separator" class="divider"></li>
         
                        <li><a href="Novels.php">Novels</a></li>
                            <li role="separator" class="divider"></li>

              <!-- Use this to separate a new link -->

              
                            <li><a href="Engineering Equipments.php">Engineering Equipments</a></li>
                  </ul>
                   </li>
                          </ul>
        
          </div>
    <!-- /.navbar-collapse -->
    </div>
  <!-- /.container-fluid -->


<!--image slider-->




<div class="slider">
    <div class="load">
      </div>
          
              <div class="principal">
                 <font color="white"><h1><strong>KITAB-KHANA</strong></h1>
                  <p>Welcome to Website</p></font>
               </div>
       </div>
  </div>
</nav>

<!-- shopping cart -->
 <h1>Letz Shop</h1>

<div class="shopping-cart">
  
  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
   
   
  </div>

  <div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div> 
    
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add1" value="Add to cart"/> </a>' ?>
</div>

<!-------------------------------------------------------------------------------------------------------------------->

<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
 
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add2" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->

<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
 
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add3" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>

<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add4" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
 
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add5" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>

<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add6" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
 
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add7" value="Add to cart"/> </a>' ?>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
 
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add8" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
 
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add9" value="Add to cart"/> </a>' ?>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
 
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add10" value="Add to cart"/> </a>' ?>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
 
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add11" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>

<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add12" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add13" value="Add to cart"/> </a>' ?>
</div>

<!-------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add14" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->


<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add15" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add16" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add17" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->
<div class="product">
    <div class="product-image">
      <div class="fis"><a href="<?php $row = mysqli_fetch_assoc($q2); echo $row["b_link"]; ?>"><img src="<?php echo $row["img"]; ?>"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1"><?php echo $row["b_name"]; ?></span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
<?php echo $row["p_des"]; ?></p>
<p><span id="span2">Product details:</span>
<?php echo $row["p_det"]; ?>
</p><br>
    </div>
    <div class="product-price"><?php echo $row["price"]; ?></div>
<?php echo
 '<a href="/User_Home.php?id='.$row["b_id"].'"><input id="in" type="submit" name="add18" value="Add to cart"/> </a>' ?>
</div>

<!--------------------------------------------------------------------------------------------------------------->




 



</body>
</html>


