<?php include_once("../shares/db/mydatabase.inc"); 
include("top2.php");
?>

<html>
<head>
<title>parents's form</title>
<style>

input[type=text],input[type=email],input[type=date],input[type=time],input[type=password],select
{
	border-radius:3px;
	height:50px;
	width:300px;
}
    body{
        background-image: url(images/zzz.jpg);
        background-position: center;
        background-size: cover;
    }

input[type=submit],input[type=reset]
{
	background-color:#4CAF50;
	color:white;
	border:none;
    border-radius: 2px;
	width:70px;
	height:50px;
}
input[type=submit]:hover,input[type=reset]:hover
{
	background-color:#45a049;
}
table
{
	border-radius:3px;
	height:200px;
	cellspacing:300px;
	cellpadding:200px;
}
textarea
{
	border-radius:4px;
	height:50px;
	width:300px;
}


</style>
</head>
<body>
      <br><br><br>  <br><br><br>  <br><br><br>
<center>
<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="select *  from subcategory where sid='$id'";
		$tbl=getDatas($sql);
	}
	
		?>
<form action="" method="post">
<table>
<h1><b>EDIT SUBCATEGORY</b></h1><br><br>
<tr>
<td>
<label>SubCategory Name</label>
</td>
    
    <td>
<input type="text" name="sc_name" value="<?php echo $tbl[0][2];?>" ></td>
</tr>
    <tr><td>
<label>SubCategory Description</label>
</td>
    <td>
         <input type="text" name="sc_des" value="<?php echo $tbl[0][3];?>" ></td>
         
    </tr>
    
    

    </table>
     <td style="position:relative;left:120px">
         <input type="submit" name="submit1" value="update">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="Reset">
</form></center>
</body></html>

<?php
if(isset($_POST['sc_name']))
{

$b=$_POST['sc_name'];
    $d=$_POST['sc_des'];

$sql="update subcategory set sub_category='$b',des='$d' where sid='$id'";
setDatas($sql);
		msgbox('Successfully Edited');
	nextpage('view_subcat.php');
}

?>

