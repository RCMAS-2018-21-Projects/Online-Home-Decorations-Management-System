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

input[type=submit],input[type=reset]
{
	background-color:tomato;
	color:white;
	border:none;
	width:70px;
	height:30px;
}
input[type=submit]:hover,input[type=reset]:hover
{
	background-color:red
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
		$sql="select *  from category where id='$id'";
		$tbl=getDatas($sql);
	}
	
		?>
<form action="" method="post">
<table>
<h1>CATEGORY</h1><br><br>
<tr>
<td>
<label>CATEGORY:</label>
</td><td>
<input type="text" name="c_name" value="<?php echo $tbl[0][1];?>" ></td>
</tr>

    </table>
     <td style="position:relative;left:100px">
         <input type="submit" name="submit1" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="Reset">
</form></center>
</body></html>

<?php
if(isset($_POST['c_name']))
{

$b=$_POST['c_name'];

$sql="update category set cname='$b' where id='$id'";
setDatas($sql);
		msgbox('Successfully stored');
	nextpage('view_cat.php');
}

?>

