<?php
session_start();
$user=$_SESSION['userid'];
 include_once("../shares/db/mydatabase.inc");?>
 <?php include("seller_top.php"); ?>
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
<style>
 table{
                   border: 2px solid #111;
                   border-radius: 1em;
                   width: 80%;
                   margin-left:0px;
                   
               }
               th {
    background-color: #17c3a2;
    color: white;
    height: 40px;
}
tr{
    height: 30px;
    border-bottom: 1px solid #ddd;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  border-radius:4px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.aa:link, .aa:visited {
  background-color: #f44336;
  color: white;
  padding: 20px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.aa:hover, .aa:active {
  background-color: red;
}

    </style>
 </head>
	<!--user--->
<div style="position:relative;left:320px;top:300px;">

<a class="aa" href="?pet=Dog">&emsp;&emsp;&emsp;&emsp;DOG&emsp;&emsp;&emsp;&emsp;</a>

<a class="aa" href="?pet=cat">&emsp;&emsp;&emsp;&emsp;CAT&emsp;&emsp;&emsp;&emsp;</a>
<a class="aa" href="?pet=birds">&emsp;&emsp;&emsp;&emsp;BIRD&emsp;&emsp;&emsp;&emsp;</a>
<a class="aa" href="?pet=fish">&emsp;&emsp;&emsp;&emsp;FISH&emsp;&emsp;&emsp;&emsp;</a>

</div>
	
<?php
if(isset($_GET['pet']))
{
	$m=$_GET['pet'];
	echo $m;
	if($m=="Dog")
{
 $sql="select * from add_pets where pcategory='$m' and email='$user'";
}
else if($m=="birds")
{
 $sql="select * from add_pets where pcategory='$m' and email='$user'";
}else if($m=="fish")
{
 $sql="select * from add_pets where pcategory='$m' and email='$user'";
}

else{
 $sql="select * from add_pets where pcategory='$m' and email='$user'";
}
	$tbl=getDatas($sql);
			$msg = mysql_error();
			if(!isset($msg) || $msg==''){
			$msg = "Success !!!";
		}
if($tbl==null){
	echo "<div style='position:relative;top:320px;left:620px;'>No Products </div>";
}
else{

	?>			
	
						<h1 style="position:relative;left:640px;top:340px;"><?php echo $m; ?>  Info  </h1>

				<table border="1" style="position:relative;width:900px;left:320px;top:380px;">
					<thead>
						<tr>
							<th>Product Name</th>	
							<th> Discription</th>
							<th>Quantity</th>
							<th>Price</th>
							
							
							<th >Edit</th>
							
						</tr>
					</thead>
<?php } ?>
					<?php
					
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr class="rem1">
						<td class="invert"><?php echo $tbl[$i][4];?></td>
						<td class="invert"><?php echo $tbl[$i][6];?></td>
						<td class="invert"><?php echo $tbl[$i][7];?>
							 
						</td>
						<td class="invert"><?php echo $tbl[$i][8];?></td>
						
						
					
						
				<td class="invert"> <a href="edit.php?a=<?php echo $tbl[$i][0];?>"><font color="green"> Edit</font> </a></td></tr>
					<?php 
					}
}
					?>
					</tbody>
				
				</table>
			
         
	
	<!--user-->
