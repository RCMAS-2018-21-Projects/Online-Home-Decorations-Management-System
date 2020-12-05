<html>
    <?php
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<head>
<title>Aurora Decors-a path of living art</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <style>
    li{
        font-weight: bold;
    font-size:15;
    }
        h5
    {
    font-weight:bold;
        font-size:18;
      font-family: "Nunito Sans", Arial, Helvetica, sans-serif;
    }
        
    </style>
    
</head>
    <body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<!--<div class="header-top-left">
					<ul>
						<li><a href="account.html"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
						<li><a href="register.html"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>			
					</ul>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.html">
								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
        
        
			<div class="banner-top">
		<div class="container">
				<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
				<div class="logo">
<h1><a href="home.php" style="font-weight:bold;"><span>Aurora</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Decors</a></h1>
				</div>
	    </div>
	    <!--/.navbar-header-->
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
			<li><a href="home.php">Home</a></li>
		   
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Product <b class="caret"></b></a>
		            <ul style="width:600px;" class="dropdown-menu multi-column columns-2">
                       <div class="row">
                           <?php
                          $sql="select * from category";
                          $tbl=getDatas($sql);
                          ?>
                             <?php
		
                            for($i=0;$i<count($tbl);$i++)
		                     {
			
			                for($j=0;$j<count($tbl[$i]);$j++)
			                  {
			
			                  }
                                
			                  ?>
                            <?php
                                $e=$tbl[$i][1];
                            ?>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h5><b><?php echo $tbl[$i][1];?></b></h5>
                                    <hr width="100%">
                                    <?php
                                $sql="select * from subcategory where category='$e'";
                                $tb=getDatas($sql);
                                ?>
                                    <?php
		
                            for($a=0;$a<count($tb);$a++)
		                    {
			
			               for($a=0;$b<count($tb[$a]);$b++)
			                {
			
			                }
			                  ?>
                                    
						            <li><a href="product.php?id=<?php echo $tb[$a][0];?>"><?php echo $tb[$a][2];?></a></li>
                                    <?php
 	                                  }
                                      ?>
                                    
						           </ul></div>
                                    <?php
 	                                   }
                            
		                               ?>
                                
                                   <!-- <li><a href="product.php?mode=Living">LivingRoom</a></li>
                                    <li><a href="product.php?mode=Bed Room">Bed Room</a></li>
                                    
                                  <li><a href="product.php?mode=Lightings">Lightings</a></li>
                                    <li><a href="product.php?mode=Decorations">Decorations</a></li>
                                    <hr>
                                     <li><a href="product.php?mode=mattresses">mattresses</a></li>
                                    <li><a href="product.php?mode=wall art">wall art</a></li>-->
                                    

					           
				          
				       
							<div class="clearfix"></div>
                        
		            </ul>
		        </li>
		 
					<li><a href="view_cart.php">CART</a></li>
					<li><a href="myorder.php">MY ORDER</a></li>
                <li><a href="about.php">ABOUT</a></li>
                    <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">My account <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-2">
			            <div class="row">
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
									
						            <li><a href="profiles.php">Profile</a></li>
						           
                                    
                                    <li><a href="edit.php">Edit Profile</a></li>
                                    
                                     <li><a href="changepassword.php">Change Password</a></li>
                                     <li><a href="../common/home.php">Log Out</a></li>

					            </ul>
				            </div>
				       
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
        
                
                
                
                
                
	        </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
</div>
</div>
    </body>
</html>

		