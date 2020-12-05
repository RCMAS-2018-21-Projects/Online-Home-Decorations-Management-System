<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php");?>
<html>
<head>
<title>user Edit</title>
<script src="maha.js"></script>
<style>
    body{
        background:url(images/q2.jpg) no-repeat top fixed ;
        background-size:cover;}
       
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
                height: 200px;
            }
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}
input[type=submit],input[type=reset]{
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit],input[type=reset]:hover {
    background-color: #45a049;
}
</style>
</head>
<?php
$sql="select * from staffreg where email='$user'";
$tbl=getDatas($sql);

for($i=0;$i<count($tbl);$i++)
		{
			
			for($j=0;$j<count($tbl[$i]);$j++)
			{
			
			}
		
?>
<body>

<div id="err" style="color: red;height: 20px"></div>
<div class="w3_login">
    <h3 style="position: relative;top:150px;left:620px;font-size:40px"><b>Edit Profile</b> </h3>
			
        <form action="" method="post" >
            <table style="position: relative;left:500px;top:180px">
                <tr>
                    <td>
                        <label> Name</label>
                    </td>
                    <td>
                       <input type="text" name="sname" value="<?php echo $tbl[$i][1];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
                
           <tr><td></td></tr>
                 
                 
                 
                 <tr>
                    <td>
                        <label>Date Birth:</label>
                    </td>
                    <td>
                          <input type="text" name="sphno" value="<?php echo $tbl[$i][2];?>" onkeypress="return verifyPhone(this,event,'err')" onblur="return varifyLength(this,'err',10,10);"/>
                      </td>
                </tr> <tr><td></td></tr>
                
                 <tr>
                    <td>
                        <label> Housename:</label>
                    </td>
                    <td>
                          <input type="text" name="city" value="<?php echo $tbl[$i][4];?>"/>
                      </td>
                </tr>
               
                <tr><td></td><td>
                <tr>
                    <td>
                        <label> City:</label>
                    </td>
                    <td>
                          <input type="text" name="dis" value="<?php echo $tbl[$i][5];?>"/>
                      </td>
                </tr>
               
                <tr><td></td><td>
				<input type="submit" value="Update" style="position:relative;top:50px;left:-120px;"></td>
        <td><input type="reset" value="reset" style="position:relative;top:50px;left:-90px;"></td>
    
                        </tr>
                    </td>
            </table>
            
            
        </form>
                                   </div>
        <div class="clearfix"></div>
		

<?php
		}
		
		if(isset($_POST['sname'])){
		
		$a=$_POST['sname'];
		
		$c=$_POST['sphno'];
		
		$e=$_POST['city'];
		$f=$_POST['dis'];
		$sql="update staffreg set name='$a',dob='$c',hname='$e',city='$f' where email='$user'";
		setDatas($sql);
		msgbox("updated");
            nextpage("home.php");
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