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
    body{
        background-image: url(images/s6.jpg);
        background-size: cover;
        background-position: center;
    }
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

$sql="select * from tbl_ordermaster where cust_id='$user'";
$tbl=getDatas($sql);
if($tbl==null){
    echo "<div style='position:relative;top:250px;left:400px'><font color='red'>No Orders</font></div>";
}
else{
    
?>
        
<form method="post" action="orders.php">
    <center>
<div style="position:relative;top:30px;border-collapse:seperate;border-spacing:0px 15px;">

                       <select style="height:40px;width:250px;" id="status" name="status">
              
              <option value=''><center>----------------Select-------------</center></option>
    <option value='Processing'>Processing</option>
    <option value='Packed' >Packed</option>
    <option value='Dispatched' >Dispatched</option>
    <option value='Delivered'>Delivered</option>
                       
    </select>
   
                
                <input type="submit" name="search" value="Search">
        </div></center></form>

<div class="checkout-right">
    <center>
										<h1 style="position:relative;top:100px;font-weight:bold;">Order Details</h1>

				<table border="1" style="position:relative;width:1000px;top:160px;">
					<thead>
						<tr>
							<th>Order Id</th>
                            <th>Order Date</th>
                            <th>Total Amount </th>
                             <th>Status</th>
                            <th></th>
                           
                           
				       </tr>
					</thead>
					<?php
					
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr >
						
						<td><?php echo $tbl[$i][0];?></td>
                        
                        <td><?php echo $tbl[$i][2];?></td>
                        <td><?php echo $tbl[$i][3];?></td>
                        
                        <td><?php echo $tbl[$i][4];?></td>
                        <td><a href="view_order.php?id=<?php echo $tbl[$i][0];?>"class="ss" >Items</a></td>
                 
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
