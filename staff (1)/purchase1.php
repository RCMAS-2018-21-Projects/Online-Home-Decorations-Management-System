<?php include_once("../shares/db/mydatabase.inc");?>
<?php
session_start();
$user=$_SESSION['userid'];
include("top.php");
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
$sql="select ifnull(max(mpid),0)+1 from tbl_purchasemaster";
$tbl=getDatas($sql);
$e=$tbl[0][0];
?>

<form action="" method="post" enctype="multipart/form-data">

<h1 style="position:relative;left:600px;top:90px;font-weight:bold;"> ADD PURCHASE</h1>
    
    <table style="position:relative;top:110px;left:420px;border-collapse: separate;border-spacing: 0 15px;">
    
    <tr>
        <td>Purchase ID</td><td>
        
        <input type="text" name="mpid" value="<?php echo $tbl[0][0]; ?>"required readonly>
        </td>
        </tr>
    
      <tr>
	<td>
		Select Vendor</td>
		
		<?php 
     $sql="select * from vendorreg ";
        $tbl=getDatas($sql);
    ?>
<td><select name="vendor" required >
     <?php foreach($tbl as $row) {?>
<option  value="<?php echo $row[0];?>">
    <?php echo $row[1];?></option>
<?php } ?>
	</select>
		</td>
	</tr>
    
         <tr>
        <td>Purchase Date</td><td>
        
        <input type="date" name="pdate">
        </td>
        </tr>
    
         <tr>
        <td>Total Amount</td><td>
        
        <input type="text" name="price">
        </td>
        </tr>
        
    <tr>
       <tr><td><input type="submit" value="Add" style="position:relative;top:50px;left:-90px;"></td>
        <td><input type="reset" value="reset" style="position:relative;top:50px;left:-100px;"></td>
        
    </tr>
        
    </table>
    

</form>

<?php
if(isset($_POST['mpid'])){
            $e1=$_POST['mpid'];
        $a=$_POST['vendor'];

    $c=$_POST['pdate'];

    $f=$_POST['price'];
$sql="insert into tbl_purchasemaster(mpid,vid,pdate,tamnt,email) values('$e1','$a','$c',$f','$user')";
		setDatas($sql);
		 echo"<script>alert('Successfully Added');</script>";
    
  
    nextpage("purchase2.php");
		}
		
     //  }}
	
	/*else
	{
		echo "Invalid file";
	}
*/
?>


















<br><br><br><br><br><br><br><br><br><br>
<?php
//include("footer.php");



?>