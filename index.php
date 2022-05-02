<?php
include("connection.php");
error_reporting(0);
session_start();

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
    <a class="navbar-brand" href="index.php">
      <img src="bb.jpg" width="30" height="30">
    </a>
     <a class="navbar-brand" href="index.php"><u>Kitab-Khana</u></a>
  

  <!-- Search bar-->
    <div class="navbar-collapse " id="searchbar">
     
      <ul class="nav navbar-nav navbar-right">
        <li><a class="navbar-brand" href="login.php">Log in</a></li>
        <li id="userPage">
          <a class="navbar-brand" href="sign.php"><i class="icon-user"></i>Sign up</a>
        </li>
        <!-- <li><a href="#logout" data-prevent="">Logout</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a class="navbar-brand" href="search.php" title="Start a new search">Search</a></li>
      </ul>
     
     
     
     <form class="navbar-form">
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
        <li class="active"><a class="navbar-brand" href="index.php">Home</a>
        </li>
        <li role="separator" class="divider">
         
          <li class="dropdown">
            <a class="navbar-brand" href="login.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My orders<span class="caret"></span></a>
               <ul class="dropdown-menu">
              <li><a href="login.php">Purchase details</a></li>
              <li role="separator" class="divider"></li>
              <li role="separator" class="divider"></li>
              <li><a href="login.php">Check your Profile</a></li>
               </ul>
              </li>
          <li role="separator" class="divider">
         
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
                <font color="white"> <h1><strong>KITAB-KHANA</strong></h1></font>
                  <p><font color="white">Welcome to Website</font></p>
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
</div>

  <div class="product">
    <div class="product-image">
      <div class="fis"><a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=767&bih=660&tbm=isch&sa=1&ei=lCqnW7miKszSvwTm9aCAAg&q=Pro+Java+Programming+images&oq=Pro+Java+Programming+images&gs_l=img.3...8367773.8371979.0.8372150.9.8.0.1.1.0.372.630.2-1j1.2.0....0...1c.1.64.img..6.2.375.0..0i24k1.0.TAjHQtIBvKc#imgrc=TJRRfIQqP2SnpM:"><img src="java.jpg"></a>
        <div class="identity"></div>
    </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Pro Java Programming</span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>
Brett Spell has been programming professionally in Java since 1996 and is a Sun-certified Java programmer, developer, and architect. Brett is a regular contributor to Java Pro magazine and former columnist on design patterns for the Intel Developer Services web site.</p>
<p><span id="span2">Product details:</span>
<br>Paperback:  720 pages<br>
Publisher:  APress; 2nd ed. edition (1 June 2005)<br>
Language:  English</p><br>
    </div>
    <div class="product-price">795</div>

 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>


</div>


  <div class="product">
    <div class="product-image">
      <div class="fis"><a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=674&tbm=isch&sa=1&ei=SkunW6WrJcrjvATaoqKYDw&q=Elements+of+Mechanical+Engineering+images&oq=Elements+of+Mechanical+Engineering+images&gs_l=img.4...369703.370273.0.376126.2.2.0.0.0.0.250.431.0j1j1.2.0....0...1c.1.64.img..0.1.249...0j0i67k1.0.cDU74iHPdvk#imgrc=32_F6j8axEHg3M:"><img src="mechanical.jpg"></a></div>
      <div class="identity"></div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Elements of Mechanical Engineering     </span></div><br>
      <p class="product-description">
      <span id="span2">Product Description</span><br>
   Includes the basic concepts of thermodynamics, first law of thermodynamics, second law of thermodynamics, thermodynamics and entropy. This work deals with applied mechanics, such as internal combustion engines, mechanics and simple machines.</p>
      <p><span id="span2">Product details:</span>
        <br>Paperback: 600 pages<br>
Publisher: Laxmi Publications (1 Dec. 2005)<br>
Language: English</p><br>
    </div>
   
    <div class="product-price">900</div>

 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>




  <!-- no 3 -->
  <div class="product">
    <div class="product-image">
      <div class="fis"><span id="span1"><a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=674&tbm=isch&sa=1&ei=xUynW7KhBMzjvgSfwobQCw&q=Automobile+Engineering+by+Er.+R+K+Rajput+images&oq=Automobile+Engineering+by+Er.+R+K+Rajput+images&gs_l=img.3...39602.52752.0.54381.3.3.0.0.0.0.253.664.0j1j2.3.0....0...1c.1.64.img..0.1.219...0j0i67k1.0.to4NAe2AzeQ#imgrc=83cIYsAEhVu_SM:"><img src="auto1.jpg"></span></a></div><br>
    <div class="identity"></div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Automobile Engineering by Er. R K Rajput</span></div><br>
      <p class="product-description">
        <span id="span2">Product Description</span><br>This book on Automobile Engineering has been written for the students preparing for B.E./B.Tech., A.M.I.E. (Section B), Diploma and Competitive examinations. It consists of Twelve chapters in all, covering the various topics systematically and exhaustively; and an "Additional Objective Type Questions' Bank" at the end.Each chapter of the book is saturated with much needed text supported by neat and self-explanatory diagrams to make the subject self-speaking to a great extent.
</p>
<p><span id="span2">Product details:</span>
        <br>Paperback: 600 pages<br>
Publisher: Laxmi Publications (1 Dec. 2005)<br>
Language: English
</p><br>
    </div>

   <div class="product-price">716</div>

 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>

  





  <div class="product">
    <div class="product-image">
     <div class="fis"> <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=674&tbm=isch&sa=1&ei=_EynW-ntNsr_vASO2rSwCA&q=Collision+and+Richardson%27s+Chemical+Engineering+images&oq=Collision+and+Richardson%27s+Chemical+Engineering+images&gs_l=img.3...34547.36458.0.37535.2.2.0.0.0.0.211.401.0j1j1.2.0....0...1c.1.64.img..0.1.211...0j0i67k1.0.wyqleGzEkqI#imgrc=7874lLeXWc34AM:"><img src="chemical.jpg"><br></a>
      <div class="identity"></div>
     </div>
    </div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Collision and Richardson's Chemical Engineering</span></div><br>
      <p class="product-description">
 <span id="span2">Product Description</span><br>
      Coulson and Richardson's classic series provides the student with an account of the fundamentals of chemical engineering and constitutes the definitive work on the subject for academics and practitioners. Each book provides clear explanations of theory and thorough coverage of practical applications, supported by numerous worked examples and problems. Thus, the text is designed for students as well as being comprehensive in coverage.</p>
    
    <p><span id="span2">Product details:</span>
      <br>
    Paperback: 928 pages<br>
Publisher: Butterworth-Heinemann; 6 edition (19 Oct. 1999)<br>
Language: English<br>
</p><br>
</div>

    <div class="product-price">5004</div>
  
 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>






  <div class="product">
    <div class="product-image">
     <div class="fis"> <a href="https://www.schandpublishing.com/books/tech-professional/electrical-engineering-electronics/electrical-electronics-engineering/9788121939683/#.W6dIBWgzZPY"><img src="ec.jpg"></a>
    <div class="identity"></div>
    </div></div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Electrical and Electronics Engineering</span></div><br>
      <p class="product-description">
       <span id="span2">Product Description</span><br>
     For B.E. I yr students | Strictly based on the syllabus of Rajiv Gandhi Proudyogiki Vishwavidyalaya (RGPV, Bhopal , M.P.). Salient Features : Strictly based on the syllabus of RGPV, Bhopal, Simple and easy tio understand language with large number of solved examples and problems. Subject Review Questions/ Answers and objective questions at the end of the each chapter</p>
      <p><span id="span2">Product details:</span>
      <br>
       Paperback: 545 pages<br>
Publisher: S. Chand Publishing<br>
Language: English<br></p>

    </div>

    <div class="product-price">240</div>
  
 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>





  <div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?q=Intro+to+Analog+and+Digital+Communication(Second+Edition)&rlz=1C1CHBF_enIN808IN808&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjavZ3N2tDdAhWKK48KHU8fCGIQ_AUIECgD&biw=1536&bih=674#imgrc=fnV-bLZ3R9rwtM:">
      <img src="ele.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Intro to Analog and Digital Communication(Second Edition)</span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
      A highly accessible and applied introduction to communication theory

Simon Haykin and Michael Moher’s Second Edition of Introduction to Analog and Digital Communications offers an accessible introduction to analog and digital communications and serves as an introductory treatment of communication theory. It is filled with an abundance of insightful examples, problems, and computer experiments. Throughout the text, the authors emphasize the practical relevance of the theory wherever appropriate, and keep the mathematical treatment at an easy-to-grasp level.
Includes two new chapters: Chapter 10, Digital Signals and Noise, and Chapter 11, System Noise and Calculations.
Motivates learning through practical applications––from the Internet, to networks, to the common radio––and a historical background of communication systems.
      <p><span id="span2">Product details:</span>
      <br>paperback: 540 pages<br>
Publisher: John Wiley & Sons; 2nd edition (3 March 2006)<br>
Language: English<br>


      </p>
    </div>

    <div class="product-price">529</div>
  
 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>










  <!-- equiments -->
  

  <div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?q=Seagate+1TB+Backup+Plus+Slim+USB+3.0+External+Hard+Drive+2.5+Inch+for+PC+and+Mac+with+2+Months+Free+Adobe+Creative+Cloud+Photography+Plan+-+Black&rlz=1C1CHBF_enIN808IN808&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiy-fHXjvndAhUPO3AKHXE2BdQQ_AUIDygC&biw=1536&bih=674#imgrc=MkMHEHTPel86wM:">
      <img src="hard disk seagate.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Seagate 1TB Backup Plus Slim USB 3.0 External Hard Drive 2.5 Inch for PC and Mac with 2 Months Free Adobe Creative Cloud Photography Plan - Black</span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
     Technical Details<br>
Brand Seagate
Series  Backup Plus Slim
Colour  Black<br>

Product Dimensions  7.6 x 2.1 x 11.4 cm<br>
Batteries:  1 Lithium ion batteries required.
Item model number STDR1000300<br>
Hard Drive Size 1 TB<br>
Hard Drive Interface  USB 1.1<br>

Included Components Backup Plus Slim Portable Drive, 18 inch USB 3.0 Cable, Quick Start Guide, Seagate Dashboard Backup Software,NTFS Driver for Mac
      <p><span id="span2">Product details:</span>
      <br>
Item Height 11.4 Centimeters<br>
Item Width  21 Millimeters<br>
Item Weight 159 g<br>


      </p>
    </div>

    <div class="product-price">3500</div>
  
 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>






<!-- equipment 2 -->
<div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=674&tbm=isch&sa=1&ei=Gn68W7K1CYzr-QbwnqGQDQ&q=Seagate+Expansion+1.5TB+USB+3.0+Portable+2.5+Inch+External+Hard+Drive+for+PC%2C+Xbox+One+and+Playstation+4&oq=Seagate+Expansion+1.5TB+USB+3.0+Portable+2.5+Inch+External+Hard+Drive+for+PC%2C+Xbox+One+and+Playstation+4&gs_l=img.3...102747.108185.0.108702.40.10.0.0.0.0.625.625.5-1.1.0....0...1c.1.64.img..39.0.0.0...0.WThZMe3arR0#imgrc=hm9t58DZkeO7sM:">
      <img src="seagate 1 tb.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Seagate Expansion 1.5TB USB 3.0 Portable 2.5 Inch External Hard Drive for PC, Xbox One and Playstation 4</span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
     Technical Details<br>

Brand Seagate<br>
Series  Expansion<br>
Product Dimensions  8 x 1.5 x 11.7 cm<br>
Item model number STEA1500400<br>
Hard Drive Size 1.5 TB<br>
Hard Drive Interface  USB 3.0<br>
Wireless Type Radio Frequency<br>
Power Source  No<br>


  <p><span id="span2">Product details:</span>
      <br>
Item Height 11.7 Centimeters<br>
Item Width  15 Millimeters<br>
Item Weight 168 g<br>


      </p>
    </div>

    <div class="product-price">3800</div>
  
 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>




<!-- equiment 3 -->
<div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=674&tbm=isch&sa=1&ei=iH68W4TxMNOEoAS9mpqACg&q=Nandini+Engineering+Combo+Set+of+4+Products+Mini+Drafter%2C+Scale%2C+Set+Squares%2C+Pro+Circle+180%2C+Sheet+Containe&oq=Nandini+Engineering+Combo+Set+of+4+Products+Mini+Drafter%2C+Scale%2C+Set+Squares%2C+Pro+Circle+180%2C+Sheet+Containe&gs_l=img.3...471454.472318.0.473052.2.2.0.0.0.0.0.0..0.0....0...1c.1.64.img..2.0.0.0...0.gza4QlzoNXM#imgrc=7UGgdeAvRTLpKM:">
      <img src="drafter.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Nandini Engineering Combo Set of 4 Products Mini Drafter, Scale, Set Squares, Pro Circle 180, Sheet Containe</span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
    Technical Details<br>
Brand NANDINI ENTERPRISES<br>
Model Number  NET 201<br>
Colour  Multi-Colour<br>
Manufacturer Part Number  NET 10238<br>


  <p><span id="span2">Product details:</span>
      <br>
Ideal For Engineering Students & professional .
packing is done with care so that it reach to you safely<br>
A nice collectable,and a good gift for Engineers .<br>
A quality product from House of Nandini<br>


      </p>
    </div>

    <div class="product-price">540</div>
 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>





<!-- equipment 4 -->
<div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=723&tbm=isch&sa=1&ei=-Km9W6mHD4XdrQHfxZnIAQ&q=sandisk+pendrive+32gb&oq=scandisk+pen&gs_l=img.3.3.0i10i24k1l10.2986.4447.0.7204.4.4.0.0.0.0.605.1256.0j2j1j5-1.4.0....0...1c.1.64.img..0.4.1255...0j0i10i67k1j0i10k1j0i8i30k1.0.Dcd5Qcuw7Vs#imgrc=XjgCFi3XfpAOaM:">
      <img src="download.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">SanDisk Cruzer Blade 32GB USB Flash Drive</span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
    Technical Details<br>
Brand SanDisk<br>
Colour  RED & BLACK<br>
Item Height 41 Millimeters<br>
Item Width  18 Millimeters<br>
Item Weight 9.07 g<br>
Product Dimensions  73.7 x 1.8 x 4.1 cm<br>
Item model number SDCZ50-032G-B35<br>
Processor Count 1<br>
RAM Size  32 GB<br>
Computer Memory Type  DDR3 SDRAM<br>
Number of USB 2.0 Ports 1<br>
Included Components Pen Drives or USB Flash Drives<br>
  <p><span id="span2">Product details:</span>
      <br>
Ultra-compact and portable USB flash drive<br>
Share your photos, videos, songs and other files between computers with ease<br>
Protect your private files with included SanDisk SecureAccess software<br>
Includes added protection of secure online backup (up to 2GB optionally available) offered by YuuWaa<br>
Password-protect your sensitive files<br>
Capless design<br>
Share your work files between computers with ease<br>


      </p>
    </div>

    <div class="product-price">420</div>
  

 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>







<!-- equiment 5 -->
<div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=674&tbm=isch&sa=1&ei=JYa8W4qZO5PW-QaWzIHIBw&q=Casio+FX-82MS+2-Line+Display+Scientific+Calculator&oq=Casio+FX-82MS+2-Line+Display+Scientific+Calculator&gs_l=img.3..0i24k1.439009.440231.0.440824.2.2.0.0.0.0.304.304.3-1.1.0....0...1c.1.64.img..1.1.302.0...0.MfTjwesph64#imgrc=fIuE4OwNIIw16M:">
      <img src="casio.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Casio FX-82MS 2-Line Display Scientific Calculator
by Casio</span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
    Black coloured calculator , designed and engineered for easy operation .<br>
Large keypad for comfortable use of the user.
Battery powered .<br>
It has a large display so that it is easy to read and use.<br>
Color coded keypad for easy key differentiation.<br>
It has a complete calculation feature with a full decimal system.<br>
Displays numbers in three digit separator formats (Standard, European, and Indian)<br>
It saves upto 150 previous calculations<br>
All the mark-up capabilities of an adding machine for simplified cost and profit calculations<br>
Lightweight and easy to port.<br>

      </p>
    </div>

    <div class="product-price">404</div>

	 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>





<!-- equiment 6 -->
<div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=674&tbm=isch&sa=1&ei=4Ie8W5j6MpG5wAPXjYCwCQ&q=Hug+Me+Drwaing+Sheet+or+Art+Paper+or+Jumbo+paper+Containe&oq=Hug+Me+Drwaing+Sheet+or+Art+Paper+or+Jumbo+paper+Containe&gs_l=img.3...275801.276557.0.276841.2.2.0.0.0.0.250.250.2-1.1.0....0...1c.1.64.img..1.0.0.0...0.SNSk96KLq1g#imgrc=GniJpNwREzJd_M:">
      <img src="hugme.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Hug Me Drwaing Sheet or Art Paper or Jumbo paper Container</span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
  Type- Drawing Tube Holder Or Sheet <br>Container,Expands from more than 1 foot or 12" to 2 feet or 24" long ( 30+ cm to 60+ cm) ,Interior diameter approx 2.5 inches.<br>
Carry your artworks, plans, posters and prints in Artists' Storage Tubes.This roll pack helps to carry with importance Sheet, Paper, Art paper, Any kind of valuable paper ,<br>
Moreover this water resistance so papers are saved from water. It will protect your work while you are on the move or go.<br>
Ideal to use to store your work when you have little space.<br>
Includes removable and adjustable shoulder strap.<br>

      </p>
    </div>

    <div class="product-price">170</div>
 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>




<!-- novels -->
<div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?q=thinking+fast+and+slow&rlz=1C1CHBF_enIN808IN808&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiYstCl-fvdAhWKtY8KHc4RCKwQ_AUIDygC&biw=1536&bih=723#imgrc=XgubfqaHhQzn_M:">
      <img src="thinking.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Thinking Fast and Slow(Paper back)</span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
 'Thinking, Fast and Slow’ is an International Bestseller authored by the eminent economist and psychologist Daniel Kahneman. The book takes the readers on a fascinating journey by dissecting the mind and goes onto explain two distinct systems that affects our way of thinking and making choices. Of these two systems, one is intuitive, emotional yet fast while the other one is more logical and deliberative.

      </p>
    </div>

    <div class="product-price">216</div>
 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>





<!-- novel 2 -->
<div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=674&tbm=isch&sa=1&ei=sfu9W_DNNczdvgSqqZToCQ&q=think+and+grow+rich&oq=think+and+grow+&gs_l=img.3.0.0l10.62283.71626.0.72831.18.15.1.2.2.0.269.1884.0j6j3.9.0....0...1c.1.64.img..6.12.1889.0..35i39k1j0i67k1.0.rlWu7jkdL1w#imgrc=mtCcNAc0fld-hM:">
      <img src="think.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">Thinking Fast and Slow(Paper back)</span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
 Think And Grow Rich has earned itself the reputation of being considered a textbook for actionable techniques that can help one get better at doing anything, not just by rich and wealthy, but also by people doing wonderful work in their respective fields. There are hundreds and thousands of successful people in the world who can vouch for the contents of this book. At the time of author’s death, about 20 million copies had already been sold. Numerous revisions have been made in the book, from time to time, to make the book more readable and comprehensible to the readers.
      </p>
    </div>

    <div class="product-price">65</div>
 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>






  <!-- novel 3 -->
  <div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=674&tbm=isch&sa=1&ei=fPu9W6nCK4zGvgTUg4PADQ&q=the+da+vinci+code+book&oq=the+da+&gs_l=img.3.2.0l10.44582.49392.0.51737.8.8.0.0.0.0.331.1016.2-3j1.4.0....0...1c.1.64.img..4.4.1015.0..35i39k1j0i67k1.0.5RLpENcxY2Y#imgrc=5gL7oyaaqMmS8M:">
      <img src="code.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">The Da Vinci Code (Robert Langdon)</span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
 The plot in ‘The Da Vinci Code’ revolves around Robert Langdon, who interprets symbols at Harvard. He gets a shocking phone call at mid-night while in Paris. The administrator of the Louvre was killed in the premises of the museum and the dead body is accompanied by a sequence of codes. As Robert was supposed to meet that person, he now stands as a suspect of the murder. Robert is accompanied by Sophie Neveu, a French cryptologist, in solving the mystery revolving around the murder.

They are astonished to find that the hints they are searching for are hidden in the works of Leonardo Da Vinci. Although the clues can be seen clearly, yet they are to be decoded. As the story unfolds, it is found out that the late administrator was affiliated with some secret society and his sole purpose was to safeguard the secret. Robert and Sophie then battle to decode the secrets running from cathedrals to castles around the whole Europe.
      </p>
    </div>

    <div class="product-price">165</div>
  
 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>






  <!-- novel 4 -->
  <div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=674&tbm=isch&sa=1&ei=Nfu9W9-rFonmvgTPs7LgBw&q=how+to+win+friends+and+influence+people&oq=how+to+win+frien&gs_l=img.3.0.0l10.42816.67958.0.69813.47.37.4.4.5.0.515.4212.0j4j8j2j1j1.16.0....0...1c.1.64.img..25.22.3843.0..0i67k1j35i39k1j0i10k1.0.DLS502eExFw#imgrc=AIO5yQUflqgr_M:">
      <img src="friends.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">How to win Friends and Influence people</span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
'How to win friends and influence people’ is a self-help book which is the pioneer of this genre. Written by Dale Carnegie and published in 1936, it has sold over 30 million copies. It has been edited and re-printed several times. This is the 2004 edition of this book. It was on the Time magazine’s 100 most influential books list in 2011. This book is a guide in improving a person's aura in the world. It is about changing how the world views and treats you by changing your own behaviour. That means that if you change the kind of energy that you emit, what comes back to you is also different. This is one of the most influential business and communication skills guide. This book teaches you how to market yourself and generate more clients. This book has been acclaimed by many known figures around the world. This book tries to get you out of a mental hell and provides you with ambition and goals.

      </p>
    </div>

    <div class="product-price">108</div>
  
 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>






 <!--  novel 5 -->
<div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=674&tbm=isch&sa=1&ei=-Pq9W7XyGYn4vgT8k5qACA&q=the+power+of+the+subconscious+mind+joseph+murphy&oq=the+power+of+the+subc&gs_l=img.3.0.0l7j0i30k1j0i24k1l2.52800.57922.0.59676.22.17.0.3.3.0.354.2122.0j3j5j1.9.0....0...1c.1.64.img..10.12.2131.0..35i39k1j0i67k1.0.j_kiIFVoccA#imgrc=slzm7hkLO713BM:">
      <img src="power.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">The Power of your Subconscious Mind</span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
 
This book can bring to your notice the innate power that the sub-conscious holds. We have some traits which seem like habits, but in reality these are those traits which are directly controlled by the sub-conscious mind, vis-à-vis your habits or your routine can be changed if you can control and direct your sub-conscious mind positively. To be able to control this 'mind power' and use it to improve the quality of your life is no walk in the park. This is where this book acts as a guide and allows you to decipher the depths of the sub-conscious.
      </p>
    </div>

    <div class="product-price">220</div>
  

 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>







  <div class="product">
    <div class="product-image">
      <a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN808IN808&biw=1536&bih=674&tbm=isch&sa=1&ei=Vvq9W--cDcn0vATxv4zQDg&q=the+one+thing&oq=the+one+thing&gs_l=img.3..0l10.158055.159787.0.160051.14.8.0.0.0.0.394.940.2-1j2.3.0....0...1c.1.64.img..11.3.940.0..0i67k1.0.vH2EoAjBJFE#imgrc=4jkgt6Y3IlFH6M:">
      <img src="one thing.jpg">
</a>    
<div class="identity"></div>
</div>
    <div class="product-details">
      <div class="product-title"><span id="span1">The One Thing </span></div><br><p class="product-description">
      <span id="span2">Product Description</span><br>
 The ONE Thing: The Surprisingly Simple Truth Behind Extraordinary Results is a 2013 book written by authors Gary Keller and Jay Papasan. The book, The One Thing, explains how the habit to succeed can be incorporated in our life to overcome the hurdles like the lies that will block our success, the thieves that will steal our time and increase our concentration in the purpose, the way we prioritize and the productivity of our business. The book comes in handy for people indulged in business and helps them increase the efficiency of their work and remove the hindering factors. The book is easy to read and substantial in the ideas it conveys.

      </p>
    </div>

 <p>   <div class="product-price">258   </p>  </div>

 <li><a href="login.php"><font size = "4">Add to cart</font></a></li>
<br>
</div>



</body>




</html>


