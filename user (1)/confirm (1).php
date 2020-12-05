<?php  session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>
<head>
<style>
        
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
           
             
            }
            label{
                color: purple;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 400px;
            }
    body{
        background-image: url(images/22.jpg);
        background-position: center;
        background-size: cover;
    }
			
            .div1 {
    border-radius: 5px;
    background-color: beige;
    margin: auto;
   padding: 30px;
    width:50%;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover {
    background-color: limegreen;
}


    </style>
</head>
	
		<!---feedback-->
			<?php
		if(isset($_GET['tot'])){
			$tot=$_GET['tot'];
			echo $a;
			$no=$_GET['no'];
			echo $b;
			
			//$m=$_GET['m'];
		}
?>
<?php
$sql="select * from userreg where email='$user'";
$tbl=getDatas($sql);
$ret_name=$tbl[0][1];
?>
    <body>
		<div class="w3_login">
            
    <center><h2 style="position: relative;top:125px;left:40px;"><b>CONFIRM ORDER </b></h2></center>
            <div style="position:relative;top:150px;">
    	<div class="div1"  style="position: relative;top:10px;">
        <form action="buy.php" method="post">
           
            <table style="position: relative;left:10px;top:5px">
                <tr>
                    <td>
                        <label>  Name</label>
                    </td>
                    <td>
                        <input type="text" name="name" value="<?php echo $tbl[0][1];?>" readonly="">
                      </td>
                </tr>
           <tr><td></td></tr>
                 
                
               
               <tr>
                    <td>
                        <label>  Quantity</label>
                    </td>
                    <td>
                        <input type="text" name="quantity" value="<?php echo $no; ?>" required=""/>
                      </td>
                </tr>
           <tr><td></td></tr>
		   <tr>
                    <td>
                        <label>  Price</label>
                    </td>
                    <td>
                        <input type="text" name="price" value="<?php echo $tot;?>" readonly="">
                      </td>
                </tr>
           <tr><td></td></tr>
		   
		    <tr>
                    <td>
                        <label> Payment Type</label>
                    </td>
                    <td>
                       <!-- <input type="radio" name="radio" value="cod" checked>Cash On Delivery</td><td>-->
						<input type="radio" name="radio" value="credit" checked>Credit/Debit
                      </td>
                </tr>
           <tr><td></td></tr>
         
               
				<tr><td></td><td><input style="position:relative;left:-100px;" type="submit" value="CONFIRM"></td></tr>
            </table>
            
            
        </form></div>
                                   </div>
								   
        <div class="clearfix"></div>

	
		<!---feedback-->

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