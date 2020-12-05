<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
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
    body{
        background-image: url(images/b4.jpg);
        background-position: center;
        background-size: cover;
    }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 200px;
                border-collapse: separate;
                border-spacing: 0 10px;
                
            }
            .div1 {
    border-radius: 5px;
    background-color: beige;
    margin: auto;
   padding: 30px;
    width:50%;
}
input[type=submit] {
    background-color: green;
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
<body>
<?php
 date_default_timezone_set('Asia/Calcutta');
		
		//echo $quantity;
		$price=$_POST['price'];
		//echo $price;
		//;
	$sql="select name from userreg where email='$user'";
	$tbl=getDatas($sql);
	$name=$tbl[0][0];
		$d = date("M-d-Y");
    ?>
		
 <div class=div1 style=position:relative;top:180px;left:20px;>
          <br>
          <h1 style=position:relative;left:150px;><font color=black family=arial ><b>PAYMENT SUCCESFULLY DONE</b></font> </h1><br>
     <br>
     <h3 style=position:relative;left:310px;><font color=black family=arial >Your order is palaced</font></h3>
                <h3 style=position:relative;left:260px;><font color=black family=arial>We will get back to you shortly!!</font></h3>
            </div>
            
			
			
			
			
		";
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