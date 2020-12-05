<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
include_once("top2.php");
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

	 if(isset($_GET['id']))
	 {
	
		$id=$_GET['id'];
$sql="select * from tbl_orderchild where om_id='$id'";
$tbl=getDatas($sql);
     }
    
?>
        


<div class="checkout-right">
    <center>
										<h1 style="position:relative;top:100px;font-weight:bold;">Item Details</h1>

				<table border="1" style="position:relative;width:1000px;top:160px;">
					<thead>
						<tr><th>Product</th>
							<th>Product Name</th>
                            <th>Quantity</th>
                            <th>Total Price </th>
                             
                           
                           
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
						<td><img src="<?php echo $tbl[$i][6];?>"  width="100" height="100"/></td>
						<td><?php echo $tbl[$i][3];?></td>
                        
                        <td><?php echo $tbl[$i][4];?></td>
                        <td><?php echo $tbl[$i][5];?></td>
                        
                      
					<?php 
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
