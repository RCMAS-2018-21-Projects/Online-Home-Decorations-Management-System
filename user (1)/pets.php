<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php");?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<head>
  <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="../temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="../temp/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!-- For Clients slider -->
      <link rel="stylesheet" href="../temp/css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="../temp/css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="../temp/css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="../temp/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="../temp///fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="../temp///fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>
 <?php
		 
		 if(isset($_GET['cat']))
{
 
 $m=$_GET['cat'];
 echo $m;
 if($m=="Dog")
 {
	 $sql="select pname,price,pcategory,image,pid from add_pets where pcategory='$m'";
}
else if($m=="cat")
{
	 $sql="select pname,price,pcategory,image,pid from add_pets where pcategory='$m' ";
}
else if($m=="birds")
{
	 $sql="select pname,price,pcategory,image,pid from add_pets where pcategory='$m' limit 3";


}
else{
	 $sql="select pname,price,pcategory,image,pid from add_pets where pcategory='$m'";

}
	$tbl=getDatas($sql);
			$msg = mysql_error();
			if(!isset($msg) || $msg==''){
			$msg = "Success !!!";
		}
}

if($tbl==null){
	echo "<div style='position:relative;top:320px;left:620px;'>No Products </div>";
}
else{
?>
 <div class="left-ads-display py-lg-4 col-lg-9" style="position:relative;left:150px;">
                  <div class="row">

<?php
		
		for($i=0;$i<count($tbl);$i++)
		{

			for($j=0;$j<count($tbl[$i]);$j++)
			{
			
			}
			?>
		<div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
		 
			 <div class="men-thumb-item">
			<?php
			
	echo "<center><img src='".$tbl[$i][3]."' style='position:relative;width:250px;height:200px;left:0px'></center>";
?>
</div>
<div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
                                          
   <?php
	echo "<center><font color='red'><h3>".$tbl[$i][0]."</h3></font></center>
	&emsp;&emsp;&emsp;&emsp;<center><font color='green'>Category:</font>".$tbl[$i][2]."</center>
	
&emsp;&emsp;&emsp;&emsp;<center><font color='green'>Price:</font>".$tbl[$i][1]."</center>";
	?>
	&emsp;&emsp;&emsp;&emsp;<center><a href="more.php?id=<?php echo $tbl[$i][4];?> & c=<?php echo $tbl[$i][3];?> & n=<?php echo $tbl[$i][0]?>"><font color="blue">MORE</font></a></center>
	
	</div></div></div> <div class="clearfix"></div></div>
	</div></div></div>
	<?php
 	}
}
?>
	</div></div>