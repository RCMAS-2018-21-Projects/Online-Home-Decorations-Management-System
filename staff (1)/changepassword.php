<?php session_start();
$username=$_SESSION['userid'];

include('top.php');
include_once('../shares/db/mydatabase.inc');
?>
<html><head>
<style>
    body{
        background:url(images/q2.jpg) no-repeat top fixed ;
        background-size:cover;}
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
    height:50px
           
             
            }
            label{
                color: rebeccapurple;
                font-size: 20px;
                font-weight: bold;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 200px;
                border-collapse: separate;
                border-spacing: 0 25px;
            }
            .div1 {
    border-radius: 5px;
    background-color: beige;
    margin: auto;
   padding: 30px;
    width:50%;
}
input[type=submit] {
    background-color: palevioletred;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover {
    background-color: rebeccapurple;
}
</style>
</head>


<body>
<center>

<p align= "right">
    <h2 style="position: relative;top:120px;left:20px;color:black"><b>Change Password</b> </h2>

<font style="font-size:30;color:black;"><b>
<div class="div1">
<form method="post" action="">
<table cellspacing="10" cellpadding="5" style="position:relative;top:100px;">
<tr>
    <td><font style="font-size:20;color:black;"><b>Old Password</b></font></td><td><input type= "password" name ="t1" /></td>
</tr>
    <tr><td><font style="font-size:20;color:black;"><b>New Password</b> </font></td><td><input type= "password" name="t2" /></td></tr>
    <tr><td><font style="font-size:20;color:black;"><b>Confirm New Password</b></font> </td><td><input type= "password" name="t3" /></td></tr>

<tr><td></td><td><input style="position:relative;left:-200px;" type="submit" value="submit" /></td></tr>
</table>
    </form>
    </div>
    </b>
    </font>
    </center>
    </body>
</html>

<?php
if(isset($_POST["t1"])){
	$oldpwd=$_POST["t1"];
	
	$newpwd=$_POST["t2"];
$cpwd=$_POST["t3"];	
$sql="select password from login where password='$oldpwd' and username='$username'";
$tbl=getDatas($sql);
echo $tbl[0][0];

if($tbl!=null)
{
	if($newpwd==$cpwd)
	{
$sql2="update login set password='$newpwd' where username='$username' and type='staff'";

setDatas($sql2);
echo"<script>alert('Successfully changed');</script>"; 
	}
	else{
		msgbox('password mismatch');
	}
}
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
<br><br><br><br>
