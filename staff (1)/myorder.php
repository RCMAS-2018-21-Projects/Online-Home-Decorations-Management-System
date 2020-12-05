<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
include_once("top.php");
  ?>
 <head>
     <style>
table{
                   border: 0px solid lightgray;
                   border-radius: 1em;
                   width: 1300px;
                   margin-left:0px;
                   
               }
    
    td{
        text-align: center;
        border-collapse: separate;
            border-spacing: inherit
    }
               th {
                   text-align: center;
    background-color: thistle;
    color: black;
    height: 50px;
                   
}
   /* body{
        background-image: url(images/s6.jpg);
        background-size: cover;
        background-position: center;
    }*/
tr{
    height: 70px;
    width: 1300px;
    border-bottom: 0px solid #ddd;
    background-color: beige;
}

    </style>
 </head>
	<!--user--->
	
	
	<body>				
<?php

$sql="select * from tbl_ordermaster";
$tbl=getDatas($sql);
if($tbl==null){
    echo "<div style='position:relative;top:250px;left:400px'><font color='red'>No Orders</font></div>";
}
else{
    
?>
        
<form method="post" action="orders.php">
    <center>
       
<div style="position:relative;top:50px;border-collapse:seperate;border-spacing:0px 15px;">

                       <select style="height:40px;width:200px;" id="status" name="status">
              
              <option value=''><center>----------------Select Status-------------</center></option>
    <option value='Processing'>Processing</option>
    <option value='Packed' >Packed</option>
    <option value='Dispatched' >Dispatched</option>
    <option value='Delivered'>Delivered</option>
                       
    </select>
     <label style="position:relative;top:-40px;left:100px;">FROM DATE</label>
    <input type="date" name="sdate" placeholder="From date">
    <label style="position:relative;top:-40px;left:100px;">TO DATE</label>
     <input type="date" name="edate" value="To date">
                <input style="height:40px;" type="submit" name="search" value="Search">
        </div></center></form>

<div class="checkout-right">
    <center>
										<h1 style="position:relative;top:100px;font-weight:bold;">Order Details</h1>

				<table border="1" style="position:relative;width:1000px;top:160px;">
					<thead>
						<tr>
							<th>Order Id</th>
                            <th>Customer Name</th>
                            <th>Products</th>
                            <th>Total Amount </th>
                            <th>Order Date</th>
                             <th>Status</th>
                            <th></th>
                            <th></th>
                           
                           
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
                        <td><a href="view_order.php?id=<?php echo $tbl[$i][0];?>"class="ss" >Items</a></td>
                 <td><a href="delstatus.php?oid=<?php echo $tbl[$i][0];?>" class="ss" >Update</a></td>
					<?php 
					}
}
					?>
                        </tr>
                   
					</tbody>
				
				</table>
</center>
    <br>
    <br>
    <br>
    <br>
</div>
</body>
		
	<!--user-->
