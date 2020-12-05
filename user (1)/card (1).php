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
                color: green;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 400px;
            }
			
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}
input[type=submit] {
    background-color: tomato;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover {
    background-color: #ac2925;
}


    </style>
 </head>
 
 <?php
 if(isset($_POST['id']))
 {
     date_default_timezone_set('Asia/Calcutta');
$date1 = date("Y-m-d");// current date
     
$a=$_POST['id'];
//echo $a;
	
		$cno=$_POST['cno'];
		$pwd=$_POST['pass'];
		
 $sql="select id from userreg where email='$user'";
$tbl=getDatas($sql);

$p=$tbl[0][0];
     //echo $p;
//echo "nnnnnnnn....".$bal;
//echo "<br>kikiki".$cno;
//echo "<br> pwd....".$pwd;
$sql="select * from addproduct where pid='$a'";
$tbl=getDatas($sql);
//$stock=$tbl[0][4];
$pname=$tbl[0][3];
//$quantity=1;
$price=$tbl[0][5];
$img=$tbl[0][8];
$org_id=$tbl[0][7];
$d = date("Y-m-d");
		$s=strtotime("+10 day");
       $k=date("Y-m-d", $s);
$sql="select ifnull(max(order_id),0)+1 from tbl_order";
	$tbl=getDatas($sql);
	$oid=$tbl[0][0];


$sql=$sql="insert into tbl_order values('$oid','$a','$user','$pname','$price','$d','$k','credit','processing','$img','$org_id')";
	       setDatas($sql);
	       setDatas($sql);
		  
		   echo "
		    <div style='position:relative;left:650px;top:250px;'>
			<FONT COLOR='RED'>PAYMENT DONE...</FONT>
			</div>
 	";
 }
	
?>













