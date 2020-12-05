<?php include_once("../shares/db/mydatabase.inc");?>
<?php
session_start();
$user=$_SESSION['userid'];
include("top2.php");
?>
<style>
    body{
        background:url(images/q2.jpg) no-repeat top fixed ;
        background-size:cover;}
* {
    box-sizing: border-box;
}

input[type=text],input[type=email],input[type=date] ,input[type=password],select, textarea {
    width: 150%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] ,input[type=reset]{
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    float: right;
}
    td{
        font-weight:bold;
    }

input[type=submit],input[type=reset]:hover {
    background-color: #45a049;
}

.container2 {
    border-radius: 2px;
    background-color:  #ffffff00;
    padding: 20px;
    width: 50%
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 60px) {
    .col-25, .col-75, input[type=submit],input[type=reset] {
        width: 75%;
        margin-top: 0;
    }
}
</style>

<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
   $sql="select * from addproduct where pid='$id'";
    $tbl=getDatas($sql);
    date_default_timezone_set('Asia/calcutta');
    $date1 = date('Y-m-d');
    $d=date('Y-m-d');
    
    //$rs="select * from tbl_purchasemaster order by pdate desc";
	 //$tbli=getDatas($rs);
    
}?>
<?php
$sql="select ifnull(max(cpid),0)+1 from tbl_purchasechild";
$tbli=getDatas($sql);
$e=$tbli[0][0];
?>

<div class="card">
<div class="w3_login">
<div class="heading"><br><br>
    <h1 style="position:relative;left:600px;top:90px;font-weight:bold;"> ADD PURCHASE</h1>
<form action="" method="POST" >
    
    <table style="position:relative;top:110px;left:520px;border-collapse: separate;border-spacing: 0 15px;">
    

            
           <tr><td></td></tr>
     <!--   <tr>
                    <td>
                        <label>Purchase ID</label>
                    </td>
                    <td>
                       <input type="text" name="purchaseid" value="<?php //echo $tbli[0][0];?>" readonly   onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>-->
                <tr>
                    <td>
                        <label>Product ID</label>
                    </td>
                    <td>
                       <input type="text" name="productid" value="<?php echo $tbl[0][0];?>" readonly   onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
        <script  src="css/jquery.js" type="text/javascript"></script>
     <script  src="css/jquery-ui.js" type="text/javascript"></script>
    <link href="css/jquery-ui.css"    rel="stylesheet" type="text/css">
           <tr><td></td></tr>
                 
                      <tr>
                    <td>
                        <label>Product Name</label>
                    </td>
                        
 
                    <td>
                       <input type="text" name="productname" value="<?php echo $tbl[0][3];?>" readonly onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
                <tr><td></td></tr>       
                
              <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                       <input type="text" name="category" value="<?php echo $tbl[0][1];?>" readonly onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                     <tr>
                    <td>
                        <label>Sub category</label>
                    </td>
                    <td>
                       <input type="text" name="subcategory" value="<?php echo $tbl[0][2];?>" readonly onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr>
                 <tr>
	<td>
		Select Vendor</td>
		
		<?php 
     $sql="select * from vendorreg ";
        $tbli=getDatas($sql);
    ?>
<td><select name="vendor" required >
     <?php foreach($tbli as $row) {?>
<option  value="<?php echo $row[0];?>">
    <?php echo $row[1];?></option>
<?php } ?>
	</select>
		</td>
	</tr>
        <tr>
        <td>Purchase Date</td><td>
        
        <input type="date" name="pdate" value="<?php echo $date1;?>" readonly>
        </td>
        </tr>
        
                   <tr>
                    <td>
                        <label>Quantity</label>
                    </td>
                    <td>
                       <input type="text" name="quantity" value="<?php echo $tbl[0][4];?>"onkeypress="return verifyPhone(this,event,'err')" onblur="return varifyLength(this,'err',10,10);" />
                      </td>
                </tr>
        <tr><td></td></tr> 
                
                      <tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                       <input type="text" name="amount" value="" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
  
                <tr>
        <td>Total Amount</td><td>
        
        <input type="text" name="price">
        </td>
        </tr>
            
            </table>
            <br>
     <tr>
       <tr><td><input type="submit" value="Add" style="position:relative;top:150px;left:-900px;"></td>
       <!-- <td><input type="reset" value="reset" style="position:relative;top:100px;left:-800px;"></td>-->
        
    </tr>
    </form>  
            </div>
            
       
                                   </div>
    <?php           
		
    if(isset($_POST['productid']))
        {
        
		$a=$_POST['productid'];
       $b=$_POST['productname'];
		$c=$_POST['vendor'];
        $d=$_POST['pdate'];
        $e4=$_POST['price'];
         $f=$_POST['quantity'];
         $g=$_POST['amount'];
            date_default_timezone_set('Asia/Calcutta'); 
$date=date("Y/m/d");
         $sql="select mpid from tbl_purchasemaster order by pdate desc";
	 $tbl=getDatas($sql);
    $bid=$tbl[0][0];	
			$p=$g+(($g*20)/100);
        
        $sql="insert into tbl_purchasechild(cpid,mpid,product_id,pname,quantity,price,vid,pdate,tamnt) values($e,'$bid','$a','$b','$f','$g','$c','$d','$e4')";
		setDatas($sql);
        
        $sql="select quantity from addproduct where pid=$a; ";
	 $tbl=getDatas($sql);
    $q1=$tbl[0][0];	
			$qq=$q1+$f;
		$sql="update addproduct set quantity='$qq',price='$p' where pid='$id'";
		setDatas($sql);
		msgbox("updated");
        nextpage("purchase2.php");
        }
    
        
        ?>