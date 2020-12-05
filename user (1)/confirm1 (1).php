<?php session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php"); ?>

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
    body{
        background-image: url(images/s8.jpg);
        background-position: center;
        background-size:cover;
    }

input[type=submit]:hover {
    background-color: limegreen;
}


    </style>
 
	
		<!---feedback-->
	

    <?php
$sql="select * from userreg where email='$user'";
$tbl=getDatas($sql);
$ret_name=$tbl[0][1];
?>
                    <?php
		if(isset($_GET['id'])){
			$a=$_GET['id'];
			$sql="select * from addproduct where pid='$a'";
			$tb=getDatas($sql);
            }
			if($tb[0][4]<=0)
            {
                 echo "<div style='position:relative;top:250px;'>
               <h2><font color='purple'><b><center>Sorry!!!Its Out of Stock!!</center></b></font></h2>";
                }
            else
            {
		
?>
                 
    
	
    <h2 style="position: relative;left:690px;top:150px;"><b>CONFIRM ORDER </b> </h2>
    	<div class="div1"  style="position: relative;top:180px;">
        <form action="payment.php" method="post">
           
            <table style="position: relative;left:10px;top:30px">
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
                        <label>  Product Name</label>
                    </td>
                    <td> <input type="text" name="id" hidden value="<?php echo $tb[0][0];?>" >
                        <input type="text" name="wname" value="<?php echo $tb[0][3];?>" >
                      </td>
                </tr>
           <tr><td></td></tr>
               
               <tr>
                    <td>
                        <label>  Category</label>
                    </td>
                    <td>
                        <input type="text" name="cat" value="<?php echo $tb[0][1];?>" required=""/>
                      </td>
                </tr>
           <tr><td></td></tr>
		   <tr>
                    <td>
                        <label>  Price</label>
                    </td>
                    <td>
                        <input type="text" name="price" value="<?php echo $tb[0][5];?>" readonly="">
                      </td>
                </tr>
           <tr><td></td></tr>
		   
		    <tr>
                    <td>
                        <label> Payment Type</label>
                    </td>
                    <td>
						<input type="radio" name="radio" value="credit" checked>Credit/Debit
                      </td>
                </tr>
           <tr><td></td></tr>
         
               
				<tr><td></td><td><input style="position:relative;left:-100px;" type="submit" value="CONFIRM"></td></tr>
            </table>
            
            
        </form></div>
                                   </div>
								   
        <div class="clearfix"></div>
<?php
            }
    ?>
	
