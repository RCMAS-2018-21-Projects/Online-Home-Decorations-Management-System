<?php

include_once("../shares/db/mydatabase.inc");
?>

<?php
include("top2.php");
?><style>
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
    td{
        font-weight: bold;
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
}body{
        background:url(images/q2.jpg) no-repeat top fixed ;
        background-size:cover;
        
        
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
$sql="select ifnull(max(cid),0)+1 from category";
$tbl=getDatas($sql);
?>



	
<!--<div style="position:relative;border:groove;width:200px;height:50px;border-radius:8px;background-color:#4CAF50;top:100px;left:100px;">
<br>
&emsp;&emsp;<a href="view_cat.php" style="font-size:18px;color:white"><b>view Category</b></a>
	
</div>-->


    
<form action="" method="post">

<table style="position:relative;top:120px;left:420px;border-collapse: separate;border-spacing: 0 15px;">
  <h1 style="position:relative;left:600px;top:90px;font-weight:bold;"> 
 ADD CATEGORY</h1>
    <tr>
    <td>Category ID</td><td><input type="text" name="cid" value="<?php echo $tbl[0][0]; ?>"required readonly ></td>
    
    </tr>
    <tr></tr>
    <tr>
    <td>Category Name</td><td><input type="text" name="cname" required></td>
    
    </tr>
    
      <tr>
         <td>Descripion</td><td><textarea name="des" rows="4" cols="10" required></textarea></td>
    
    </tr>
    
    <tr>
    <tr><td><input type="submit" value="Add" style="position:relative;top:50px;left:90px;"></td>
        <td><input type="reset" value="reset" style="position:relative;top:50px;left:20px;"></td>
        
    </tr>
    
    
    
    </table>







</form>
<?php
if(isset($_POST['cid'])){
	
	$a=$_POST['cid'];
    $a1=$_POST['cname'];
	$b=$_POST['des'];
    	
	$sql="select * from category where cname='$a1'";	
	$tbl=getDatas($sql);
    $em1=$tbl[0][2];
    if($em1=='')
    {
	$sql="insert into category values('$a','$a1','$b')";
	setDatas($sql);
        msgbox("Added successfully");

    	nextpage("home.php");}
    else
    {
         msgbox("Category already exists"); 
    }
}
?>