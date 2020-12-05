<?php
include('top.php');
include_once('../shares/db/mydatabase.inc');
?>

<html>
<head>
	<style>
	
		th{
			height: 40px;
			background-color: thistle;
			color: white;
		}
        td{
            background-color: beige;
            text-align: center;
            height: 60px
        }
        INPUT[TYPE=SUBMIT],INPUT[TYPE=RESET]
{
	background-color:lightcoral;
	COLOR:BLACK;
	HEIGHT:35pX;
	WIDTH:100PX;
    border-radius:8px;
}
    
	</style>
    </head>
    
    
    

<link rel="stylesheet" href="file:///F|/css/print.css" type="text/css">
<script>
    function fun()
    { 
       var a=document.getElementById('a');
       a.style.visibility='hidden';
       window.print();
      
           }
	</script>
      
        <?php
if(isset($_POST['search']))
{
    $txtStartDate=$_POST['txtStartDate'];
    $txtEndDate=$_POST['txtEndDate'];
    $status=$_POST['status'];
//echo $txtStartDate;
    $s1="Delivered";
    $s2="Dispatched";
    $s3="Processing";
    $s4="Packed";
    $flag=1;
    if(($txtStartDate==null)&&($txtEndDate==null))
            {  
                $flag=0;  
            }
if($status==$s1)
{
    if($flag==0)
    {
      $query="select * from tbl_ordermaster where del_status='$s1' order by o_date";  
    }
    else
    {
     $query="select * from tbl_ordermaster where o_date between'$txtStartDate'and'$txtEndDate' and del_status='$s1' order by o_date";
        }
    $tbl=getDatas($query);
}
    else if($status==$s2)
{
         if($flag==0)
    {
      $query="select * from tbl_ordermaster where del_status='$s2' order by o_date";  
    }
         else
         {
     $query="select * from tbl_ordermaster where o_date between'$txtStartDate'and'$txtEndDate' and del_status='$s2' order by o_date";
         }
    $tbl=getDatas($query);
}
     else if($status==$s3)
{
         if($flag==0)
    {
      $query="select * from tbl_ordermaster where del_status='$s3' order by o_date";  
    }
         else
         {
     $query="select * from tbl_ordermaster where o_date between'$txtStartDate'and'$txtEndDate' and del_status='$s3' order by o_date";
         }
    $tbl=getDatas($query);
         
}
   else if($status==$s4)
{
        if($flag==0)
    {
      $query="select * from tbl_ordermaster where del_status='$s4' order by o_date";  
    }
         else
         {
    $query="select * from tbl_ordermaster where o_date between'$txtStartDate'and'$txtEndDate' and del_status='$s4' order by o_date";
         }
    $tbl=getDatas($query);
}
    else
        {
         if($flag==0)
    {
      $query="select * from tbl_ordermaster  order by o_date";  
    }
         else
         {
    $query="select * from tbl_ordermaster where o_date between'$txtStartDate'and'$txtEndDate' order by o_date";
         }
    $tbl=getDatas($query);
}
if($tbl==null){
 echo "<div style='position:relative;top:150px;color:purple;left:620px;'>NO ORDERS YET...</div>";
}
else{
        ?>
  
	<div style="position:relative;top:10px;left:120px;">
<div style="background-color:thistle;width:1000;height:200">
<img src="images/logo.png" height="200" width="200" style="position:relative;top:20px;left:150px;">
<div style="position:relative;top:-130px;left:750px;"><b>Aurora Decors<br>
							Kakkanad,Ernakulam<br>
							682016<br>
							Telephone : +91 9020996500<br>
							Email : <a class="mail" href="mailto:mail@example.com">auroradecors@gmail.com</a></b></div>

		<h1 style="position:relative;left:580px;top:20px;color:black;font-weight:bold;"><u></u></h1>
		<br>
		<br>
		<br>
<!--<div style="position:relative;left:100px;top:40px">
		<label>
			<font color="purple">Date From : </font>
		</label>   <?php echo $txtStartDate;?>
		<br><br>
		<label>
			<font color="purple">Date To:</font>
		</label>   <?php echo $txtEndDate;?>
</div>-->
		

	
						

	
									
<h1 style="position:relative;left:580px;top:-100px;"><b>Order Report</b></h1>
<center>
	
				<table border="1" style="position:relative;width:1000px;top:-30px;">
					<thead>
						<tr>
							<th>Order Id</th>
                            <th>Customer Name</th>
                            <th>Products</th>
                            <th>Total Amount </th>
                            <th>Order Date</th>
                             <th>Status</th>
                           
                           
                           
				       </tr>
					</thead>
					<?php
					
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
                        $u=$tbl[$i][1];
                        $ss="select * from userreg where email='$u'";
                        $ts=getDatas($ss);
                        ?>
					<tbody><tr >
						
						<td><?php echo $tbl[$i][0];?></td>
                        <td><?php echo $ts[0][1];?></td>
                        <td>
                        <?php
                        $ii=$tbl[$i][0];                        $sn="select pname from tbl_orderchild where om_id='$ii' group by pname";
                        $f=getDatas($sn);
                        for($a=0;$a<count($f);$a++)
					    {
						for($b=0;$b<count($f[$a]);$b++)
						{
						}
                            echo $f[$a][0];echo "<br>";
                        }
					    ?>
                        </td>
                        
                        <td><?php echo $tbl[$i][3];?></td>
                        <td><?php echo $tbl[$i][2];?></td>
                        <td><?php echo $tbl[$i][4];?></td>
                       
					<?php 
					}
}
					?>
                        </tr>
                   
					
				
				

    <br>
    <br>
    <br>
    <br>


		
	<!--user-->

<div style="position:relative;left:300px;top:980px">
	
</div>
<div style="position:relative;left:50px;top:150px">
<input type="submit" name="sub" id="a" value="Print" onclick="fun();" size="500"/>
</div>
						<?php
}

					     ?>
					</tbody>
				
				</table>
    
    
    
</html>