<?php 
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>
<head>
<style>
        
input,textarea,select,input[type=number] {
                border: 1px solid;
             border-radius: 4px;
             width: 4%;
           
             
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
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 15px;
    width:150px;
    left:150px;
}

input[type=submit]:hover {
    background-color: #45a049;
}
    </style>

	<!-- banner -->
	<!-- more -->
		
<?php
	 if(isset($_GET['id']))
	 {
	
		$a=$_GET['id'];
		echo  $a; 
		$c=$_GET['c'];
		echo $c;
		$n=$_GET['n'];
		
			
		$sql="select * from addproduct where pid='$a'";
		$tbl=getDatas($sql);

	
	
	?>
	<div style="position:relative;left:300px;top:100px;">
<div class="agileinfo_single">
<div style="position:relative;left:60px;top:-50px">
<font color="green">
<?php
				//echo "<h1>". $tbl[0][1]."</h1>";
				?></font>
				</div>
    <br>
    <br>
				<div class="col-md-4 agileinfo_single_left" style="position:relative;left:50px;top:-50px;">
				<?php
					echo "<img  width=80%;height=80%; src='".$tbl[0][7]."'  class='img-responsive' />";
					?>
				</div>
				<div class="col-md-8 agileinfo_single_right" style="position:relative;top:10px;">
					
					<div class="w3agile_description">
						<font color="black" size='5'><b><?php
						echo $tbl[0][3];
							?></b></font>
					</div>
                    
<div class="w3agile_description">
						<font color="black" size='5'><b><?php
						echo $tbl[0][6];
							?></b></font>
					</div>
                    
                    
					<br>
					
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
					<!--	<h4><font color="black"size='5'><b>Price :</b></font>-->
                            <font color="brown"size='5'><b><?php
                             echo "Rs. ";
                            echo $tbl[0][5];
							//echo "<h4>".$tbl[0][5]."</h4>";
                                ?></b></font></h4>
						
						</div>
												
					</div>
                    <br>
                    <form action="cart.php" method="post">
                        <div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
						<h4><font color="black" size='5'>Quantity:&nbsp;</font>
                            <input type="number"  name="no" min="1" max="<?php echo $tbl[0][4];?>" value="1"/>
                            <input type="text" hidden="" name="id" value="<?php echo $a; ?>"/></h4>
						</div>
                          <div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart" style="position:relative;top:10px;left:1px;">
                            
						<h4><b><font color="black" size=5>Availability: </font></b><?php
                           
							if($tbl[0][4]>"0")
                                echo "<b><font size=5>In stock</b></font>";
                            else
                                echo "<b><font size=5>Out of stock</b></font>"
							
                            ?>
						</h4>
						</div>
												
					</div> 
						<br>
                            <div class="aa">
                                <b>
                        <input type="submit"  name="submit" value="ADD TO CART" class="button" />
                                    </b>
                                </div>
					</div>
                             </form>
                    
                    
                    
                    <div class="snipcart-details agileinfo_single_right_details"style="position:relative;top:-59px;left:160px;background-color:#45a049;width:120px;height:45px;padding:15px;border-radius:4px;">
                        <a href="confirm1.php?id=<?php echo $tbl[0][0];?>"><B><font color="white">BUY NOW</font></B></a>
	
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	 <?php  }?>
		<div class="clearfix"></div>
		<!-- more -->


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