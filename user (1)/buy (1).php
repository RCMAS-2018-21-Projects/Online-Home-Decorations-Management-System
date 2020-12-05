<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php");?>


<head>
<style>
        

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container2 {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text],input[type=password],select {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
    </style>
</head>
<body>


<?php


		$quantity=$_POST['quantity'];
		
		$price=$_POST['price'];
		
		$type=$_POST['radio'];
		
		
		echo $t;
     date_default_timezone_set('Asia/Calcutta');
     $date1 = date('Y-m-d');// current date
		$d = date('Y-m-d');
		$s=strtotime("+10 day");
       $k=date("Y-m-d", $s);
		$m=$_POST['image'];
		$sql="select name from userreg where email='$user'";
	$tt1=getDatas($sql);
	$cust=$tbl[0][0];

?>
    
    


    
<!-- banner -->
<div class="row" style="position:relative;width:600px;left:450px;top:15px;">
  <div class="col-75">
    <div class="container2">
      <form action="" method="post">
      
        <div class="row">
          

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
              <label for="cname">Amount TO Pay</label>
            <input type="text" id="cname" name="price" value="<?php echo $price;?>" readonly>
               <input type="text" id="cname" name="id" hidden value="<?php echo $id;?>">
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" >
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
																		  placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;" pattern="^\d{4}\d{4}\d{4n numbers" required>
            <label for="expmonth">Exp Month</label>
            <select id="expmonth" name="expmonth" >
              
              <option value=''>Select month"</option>
    <option selected value='1'>January</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
    <option value='7'>July</option>
    <option value='8'>August</option>
    <option value='9'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>
    </select> 
              
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <select id="expyear" name="expyear" >
                    
                    
                    <option value="2020"> 2020</option>
                    <option value="2021"> 2021</option>
                    <option value="2022"> 2022</option>
                    <option value="2023"> 2023</option>
                    <option value="2024"> 2024</option>
                     <option value="2025">2025</option>
                    <option value="2026"> 2026</option>
                    <option value="2027"> 2027</option>
                    <option value="2028"> 2028</option>
                    <option value="2029"> 2029</option>
                    <option value="2030"> 2030</option>
                     <option value="2031">2031</option>
                    <option value="2032"> 2032</option>
                    <option value="2033"> 2033</option>
                    <option value="2034"> 2034</option>
                    <option value="2035"> 2035</option>
                    <option value="2036"> 2036</option>
                     <option value="2037">2037</option>
                    <option value="2038"> 2038</option>
                    <option value="2039"> 2039</option>
                    <option value="2040"> 2040</option>
                    <option value="2041"> 2041</option>
                    <option value="2042"> 2042</option>
                    <option value="2043"> 2043</option>
                </select>
               
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" placeholder="" pattern="{0-9}{3}">
              </div>
            </div>
          </div>
          
        </div>
          <?php
          
          ?>
       
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  
</div>

</body>


<?php
if(isset($_POST['cardname'])){
	
	$a=$_POST['cardname'];
    $a1=$_POST['cardnumber'];
	$b=$_POST['expmonth'];
    	$c=$_POST['expyear'];
    $sql="select * from tbl_cardpay where email='$user' and card_no='$a'";
    $t2=getDatas($sql);
    if($t2==null)
    {
    $sql="select ifnull(max(cardid),0)+1 from tbl_cardpay";
    $t1c=getDatas($sql);
    $cid=$tc[0][0];
	$sql4="insert into tbl_cardpay values('$cid','$user','$a','$a1',$b','$c')";
	setDatas($sql4);
        }
    else
    {
        $cid=$t2[0][0];
    }
    $sql="select ifnull(max(om_id),0)+1 from tbl_ordermaster";
$t19=getDatas($sql);
    $om_id=$t19[0][0];
    $sqlll="insert into tbl_ordermaster values('$om_id','$user','$d','$price','Processing','$k','placed')";
    setDatas($sqlll);
$sql="select ifnull(max(pay_id),0)+1 from tbl_payment";
$t11=getDatas($sql);
    $pid=$t11[0][0];
    $sql1="insert into tbl_payment values('$pid','$om_id','$cid','$d','$price')";
    setDatas($sql1);
    $db="select *,sum(t_amnt),sum(num) from tbl_cart where buyer='$user' and pay_status='null'  group by prdt_name";
$t33=getDatas($db);
for($i=0;$i<count($t33);$i++)
		{
			
			for($j=0;$j<count($t33[$i]);$j++)
			{
			
			}
    $pid=$t33[$i][2];
    $pn=$t33[$i][3];
    $tm=$t33[$i][11];
    $tp=$t33[$i][10];
    $img=$t33[$i][7];
    
    $sql="select ifnull(max(oc_id),0)+1 from tbl_orderchild";
$t17=getDatas($sql);
    $ocid=$t17[0][0];
		$sql1="insert into tbl_orderchild values('$ocid','$om_id','$pid','$pn','$tm','$tp','$img')";
    setDatas($sql1);
    $sql="select * from addproduct where pid='$pid'";
    $rt=getDatas($sql);
    $stock=$rt[0][4];
    $bal=$stock-$tm;
    $sq="update addproduct set quantity='$bal' where pid='$pid'";
    setDatas($sq);
			
}
    $sql="DELETE FROM tbl_cart where buyer='$user'";
    setDatas($sql);
        msgbox("Order Placed Succesfully");
    	nextpage("thankyou.php");
    
    }
    
?>
		<!-- Bootstrap Core JavaScript -->
<script src="../temp/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="../temp/js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>