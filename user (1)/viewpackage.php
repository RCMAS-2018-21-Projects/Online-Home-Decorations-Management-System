<?php include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- jQuery library -->

<style>
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

	




		
		<!-- full details -->
		
	<form>
		<?php
$sql="select category,subcategory,pname,price,pimage,pid from addproduct"; 
 $tbl=getDatas($sql);
 for($i=0;$i<count($tbl);$i++)
		{
			
			for($j=0;$j<count($tbl[$i]);$j++)
			{
			
			}
			?>
			<div class="team-content-page ">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 team-team">
			
				<div class="col-md-3 w3ls_w3l_banner_left" style="position: relative;padding:0px; top:70px;;left:100px;" >

			<?php
			
	echo "<img src='".$tbl[$i][6]."' style='position:relative;width:150px;height:200px;'><br>";

	echo "&emsp;&emsp;&emsp;".$tbl[$i][0]."<br>
	&emsp;&emsp;&emsp;".$tbl[$i][1]."<br>
	
&emsp;&emsp;&emsp;".$tbl[$i][2]."<br>";
	?>
                    &emsp;&emsp;&emsp;<a href="more.php?id=<?php echo $tbl[$i][5];?>">MORE</a></div></div></div></div>
           <div class="snipcart-details" style=" position: relative;width: 155px;right:75px">
										
											
											</form>
										</div>
	
		</div>
		
<?php
 	}
		?>
		
<!-- full details -->

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