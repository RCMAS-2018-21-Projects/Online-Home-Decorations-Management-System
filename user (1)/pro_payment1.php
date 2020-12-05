<?php session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php"); ?>

<head>
<style>
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
        
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
           
             
            }
            label{
                color: green;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 200px;
            }
			
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}
input[type=submit] {
    background-color: tomato;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover {
    background-color: #ac2925;
}


    </style>
    <script src="maha.js"></script>
 </head>
 
 <?php
 if(isset($_POST['id']))
 {
 $a=$_POST['id'];
//echo $a;
$b=$_POST['radio'];
//echo $b;
  
     $sql="select name from customerreg where email='$user'";
	$tbl=getDatas($sql);
	$bid1=$tbl[0][0];
     
     
$sql="select * from addproduct where pid='$a'";
$tbl=getDatas($sql);
$stock=$tbl[0][5];
     $b2=$tbl[0][3];
$pname=$tbl[0][4];
//echo "f".$stock;
//$quantity=1;
$price=$tbl[0][6];
$img=$tbl[0][9];
$org_id=$tbl[0][8];
     $sql="select id from userreg where email='$user'";
     $tbl=getDatas($sql);
     $id1=$tbl[0][0];
     echo $id1;
     date_default_timezone_set('Asia/Calcutta');
$date1 = date("Y-m-d");// current date
$d = date("Y-m-d");
		$s=strtotime("+10 day");
       $k=date("Y-m-d", $s);
$balstock=$stock-1;
$sql="select ifnull(max(order_id),0)+1 from tbl_order";
	$tbl=getDatas($sql);
	$oid=$tbl[0][0];
	//echo "orderid------".$oid;
if($stock<=0){
					echo "<div style='position:relative;top:250px;left:620px;'><font color='red'>Sorry No Stock available...</font></div>";
		}
		else
		{
		
		$sql="update addproduct set quantity='$balstock' where pid='$a'";
		setDatas($sql);
	

if($b=="credit"){
	?>
<h3 style="position:relative;left:620px;top:130px;">CARD Info.  </h3>
    	<div class="div1"  style="position:relative;top:150px;">
        <form action="card.php" method="post" style="position:relative;width:520px;left:120px;" class="creditly-card-form agileinfo_form">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="credit-card-wrapper">
											<div class="first-row form-group">
											
												<div class="controls">
													<label class="control-label">Quantity</label>
													<input class="billing-address-name form-control" type="text" name="quantity" value="1">
												</div>
												<div class="controls">
													<label class="control-label">Total Price</label>
													<input class="billing-address-name form-control" type="text" name="price" value="<?php echo $price;?>">
												</div>
												
												<div class="controls">
													<label class="control-label">Buyer Name:</label>
													<input class="billing-address-name form-control" type="text" name="bname" value="<?php echo $user;?>">
												</div>
												<div class="controls">
													<label class="control-label">Name on Card</label>
													<input class="billing-address-name form-control" type="text" name="name" required >
												</div>
												
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Card Number</label>
															<input class="number credit-card-number form-control" type="text" name="number"
																		  inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
																		  placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;" pattern="^\d{4}\d{4}\d{4}\d{4}$" title="must contain 16 numbers" required>
														</div>
													</div>
													
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Order Date</label>
													<input class="expiration-month-and-year form-control" type="text" name="date" value="<?php echo $d;?>">
													<input type="text" name="id" value="<?php echo $a;?>" hidden=""/>
												</div>
											</div>
											<input type="submit" value="PAYMENT">
										</div>
									</section>
								</form></div>

 
<?php
}
 else{
	 
	$sql="insert into tbl_order values('$oid','$a','$user','$pname','$price','$date1','$d','$k','cod','processing','$img','$bid1')";
	       setDatas($sql);
	
     echo "
		    <div style='position:relative;left:450px;top:120px;'>
			<font color='red'>Buyer Name:</font>$user<br>
			<font color='red'>Product:</font>$pname<br>
			
			<font color='red'>Price:</font>$price<br>
			<font color='red'>Expected Delivery:</font>$k<br>
			<font color='red'>Order Date:</font>$d<br>
			we will get back to you shortly!!!!! Thank You.
			</div>
		";
	
 }
 
 }
 }

?>













