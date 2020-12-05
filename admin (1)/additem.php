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
    td{
        font-weight: bold;
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
$sql="select ifnull(max(pid),0)+1 from addproduct";
$tbl=getDatas($sql);
?>
<form action="" method="post" enctype="multipart/form-data">

<h1 style="position:relative;left:600px;top:90px;font-weight:bold;"> ADD PRODUCT</h1>
    
    <table style="position:relative;top:110px;left:420px;border-collapse: separate;border-spacing: 0 15px;">
    
    <tr>
        <td>Item ID</td><td>
        
        <input type="text" name="pid" value="<?php echo $tbl[0][0]; ?>"required readonly>
        </td>
        </tr>
    
      <tr>
	<td>
		Select Category</td>
		
		<?php 
     $sql="select category from subcategory ";
        $tbl=getDatas($sql);
    ?>
<td><select name="category" required >
     <?php foreach($tbl as $row) {?>
<option  value="<?php echo $row[0];?>">
    <?php echo $row[0];?></option>
<?php } ?>
	</select>
		</td>
	</tr>
    
        <tr>
	<td>
		Select Subcategory</td>
		
		<?php 
     $sql="select sub_category from subcategory ";
        $tbl=getDatas($sql);
    ?>
<td><select name="subcategory" required >
     <?php foreach($tbl as $row) {?>
<option  value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
<?php } ?>
	</select>
		</td>
	</tr>
    
    
         <tr>
        <td>Product Name</td><td>
        
        <input type="text" name="pname">
        </td>
        </tr>
    
       <!--  <tr>
        <td>Quantity</td><td>
        
        <input type="text" name="quantity">
        </td>
        </tr>-->
    
         <!--<tr>
        <td>Price</td><td>
        
        <input type="text" name="price">
        </td>
        </tr>-->
    
         <tr>
        <td>Description</td><td>
         <!--<td>SubCategory Descripion</td><td>--><textarea name="des" rows="4" cols="10" required></textarea></td>
        
        </td>
        </tr>
    
         <tr>
        <td>Image</td><td>
        
        <input type="file" name="file1">
        </td>
        </tr>
   
        
        
    <tr>
       <tr><td><input type="submit" value="Add" style="position:relative;top:50px;left:90px;"></td>
        <td><input type="reset" value="reset" style="position:relative;top:50px;left:-100px;"></td>
        
    </tr>
        
        
        
      
        
    </table>
    

</form>





	<?php
$fldr = "../uploads";
	$allowedExts = array("jpg", "gif", "jpeg","mp4");
	$extension = pathinfo($_FILES['file1']['name'], PATHINFO_EXTENSION);
	$f=$_FILES["file1"]["name"];
	
	//echo "upload/$f";

	
	$size = $_FILES["file1"]["size"];
	if($_FILES["file1"]["size"] > 5000000)
	{
		die("File Size is ".($size/1000000)."MB, Maximum allowed size is 5MB");
	}
	if ((($_FILES["file1"]["type"] == "image/jpg")
	|| ($_FILES["file1"]["type"] == "image/jpeg")
	|| ($_FILES["file1"]["type"] == "image/gif")
	|| ($_FILES["file1"]["type"] == "video/mp4"))
	
	&& ($_FILES["file1"]["size"] <= 50000000)
	&& in_array($extension, $allowedExts)){
		if ($_FILES["file1"]["error"] > 0)
		{
			echo "Return Code: " .$_FILES["file1"]["error"]. "<br />";
		}
		else
		{
		if (file_exists("$fldr/" .$_FILES["file1"]["name"]))
		{
			echo $_FILES["file1"]["name"] . " already exists. ";
		}
		else
		{
			move_uploaded_file($_FILES["file1"]["tmp_name"],"$fldr/" . $_FILES["file1"]["name"]);
			

			$mv_name = $_FILES["file1"]["name"];		
			$mv_type = $_FILES["file1"]["type"];
				$fname=$fldr."/".$mv_name;
			$mv_size = $_FILES["file1"]["size"];
        }

if(isset($_POST['pid'])){
            $e1=$_POST['pid'];
        $a=$_POST['category'];
			$b=$_POST['subcategory'];
    $c=$_POST['pname'];
   // $d=$_POST['quantity'];
   // $e=$_POST['price'];
    $f=$_POST['des'];
     $e=0;
	$d = 0;		
			
		$sql="insert into addproduct(pid,category,subcategory,pname,quantity,price,des,pimage) values('$e1','$a','$b','$c','$d','$e','$f','$fname')";
		setDatas($sql);
		 echo"<script>alert('Successfully Added');</script>";	
			echo "saved".$fname;
  
    nextpage("home.php");
		}
		
        }}
	
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