<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php");?>
<br><br><br><br><br><br><br><br><br><br><br>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  
}
    
    input[type=text]{
        border: none;
        border-radius: 4px;
        width: 350px;
        height: 50px;
        background-color:beige;
    }
    input[Type=submit]{
        border: none;
        border-radius: 4%;
        height: 50px;
        width:150px;
     cursor: pointer;
        background-color:rebeccapurple;
        color: white;
    }
    input[type=submit]:hover{
        background-color: palevioletred;
    }
    h1,h3
    {
        font-weight: bold;
        color: black;
    }
</style>
</head>
<div style="position:relative;top:-100px;left:250px">
<form action="search.php" method="post">
<table>
   
    </table>
</form >
</div>
<div class="left-ads-display py-lg-4 col-lg-9" style="position:relative;left:150px;top:-50px">
                  <div class="row">

<?php
if(isset($_GET['id']))
{

 $id=$_GET['id'];
 //echo $m;

    //$sql="select * from category where cid='$id'";
	//$tbli=getDatas($sql);
    //$e=$tbli[0][1];
    $sql="select * from subcategory where sid='$id'";
    //$sql="select * from addproduct where category='$e'";
	$tbl=getDatas($sql);
    $e=$tbl[0][1];
    $sc=$tbl[0][2];
			$msg = mysql_error();
			if(!isset($msg) || $msg==''){
			$msg = "Success !!!";
		}
}
?>


 <h1 style="position:relative;left:100px; top:-70px;"><font weight="bold"><?php echo $sc;?></font></h1>
                 <?php     
$sql="select * from addproduct where subcategory='$sc' and category='$e' and price!='0'";
            $tb=getDatas($sql);
            $msg = mysql_error();
			if(!isset($msg) || $msg==''){
			$msg = "Success !!!";
		}

?>
                      <?php
		
		for($i=0;$i<count($tb);$i++)
		{
			
			for($j=0;$j<count($tb[$i]);$j++)
			{
			
			}
			?>
			<div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
		 
			 <div class="men-thumb-item">
			<a href="more.php?id=<?php echo $tb[$i][0];?> ">	
	<center><img src="<?php echo $tb[$i][7];?>" style='position:relative;border-radius:20px;width:380px;height:450px;left:0px'></center></a>
</div>
<div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
<?php
	echo "<center><font color='black' size='5'><b><h3>".$tb[$i][3]."</h3></b></font></center>

&emsp;&emsp;&emsp;&emsp;<center><font color='brown' size='3'><b>Rs.".$tb[$i][5]."<b></font></center>";
	?>
	&emsp;&emsp;&emsp;&emsp;<!--<center><a href="more.php?id=//<?php /*echo $tbl[$i][0];*/?>"><font color="blue">MORE</font></a></center>-->
<!--<a href="cart.php?id=<?php //echo $tbl[$i][0];?> "><font color="blue">ADD TO CART</font></a>-->
                                           
                                           
                                           
                                           
            <!--<form action="cart.php?id=<?php //echo $tbl[$i][0];?>" method="post">
                                           <center>
    <input type="submit"  name="submit" value="" /></center>
                                           </form>-->
	</div></div></div> <div class="clearfix"></div></div>
	</div></div></div>

 <?php
 	}
                     	?>
		
	</div></div>
		
		
		
		