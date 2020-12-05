<?php session_start();
$user=$_SESSION['userid'];
 include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>

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
                height: 200px;
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
$date1 = date('Y-m-d');// current date
    $a=$_POST['id'];
    //echo $a;
$no=$_POST['no'];
$sql="select * from addproduct where pid='$a'";		
		$tbli=getDatas($sql);
	//$sql2="select * from tbl_retailer where ret_email='$user'";
      //  $tblr=getDatas($sql2);
       //$ret_id=tblr[0][0];
    $date=date(d-m-yyyy);
    $prdt_id=$tbli[0][0];
    $amnt=$tbli[0][5];
       $orderm_id=uniqid();
    $tot=$no*$amnt;
    $p=$tbli[0][3];
    $org_id=$tbli[0][7];
    $img=$tbli[0][7];
	$q=$tbli[0][4];
	if($q<=0){
		echo "<div style='position:relative;top:250px;left:620px;'><font color='red'>Sorry No Stock available...</font></div>";
	}
	else if($q<$no)
	{
		echo "<div style='position:relative;top:250px;left:620px;'><font color='red'>Available quantity:".$q.". If u need more wait for two days...</font></div>";
	}
	//else{
	//$qun=$q-$no;
 
//$sql="update addproduct set quantity='$qun' where pid='$a'";
		//setDatas($sql);
$sql3="insert into tbl_cart(`buyer`, `p_id`, `prdt_name`, `staff_id`, `num`, `t_amnt`, `img`,`pay_status`,`order_date`) values('$user','$a','$p','$org_id','$no','$tot','$img','null','null')";
setDatas($sql3);
    
 $sql5="insert into `tbl_cart1`(`buyer`, `p_id`, `p_name`, `brand`, `num`, `t_amnt`, `img`,`pay_status`,`o_date`,`place`,`del_status`) values('$user','$a','$p','$ca','$no','$tot','$img','null','$date1','$sub','Processing')";
setDatas($sql5);
      
   
   

        
//$sql4="insert into tbl_order (product_id,cust_id,prdt_name,price,order_date,del_date,pay_method,status,img,org_id)values('$a','$user','$p','$tot','null','null','null','processing','$img','$no')";
//setDatas($sql4);
    
    
    
    
echo "<script>alert('successfully  added to your cart!!!')</script>";
nextpage('view_cart.php');
}

?>