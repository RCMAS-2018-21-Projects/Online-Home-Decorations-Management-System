<?php include_once("../shares/db/mydatabase.inc");?>
 <?php include("top.php"); ?>
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
tr{
    height: 70px;
    width: 1300px;
    border-bottom: 0px solid #ddd;
    background-color: beige;
}

    </style>
 </head>
	<!--user--->
	
	<div class="checkout-right">
										<h1 style="position:relative;left:540px;top:120px;font-weight:bold;">Product Details</h1>

				<table border="1" style="position:relative;width:1300px;left:180px;top:150px;">
					<thead>
						<tr>
							<th>Image</th>
							<th> Name</th>
							
							<th>Category</th>
                            <th>Sub Category</th>
                            <th>Price</th>
                            <th>  </th>
                            <th>  </th>
                           
							
						
							
						</tr>
					</thead>
					<?php
					$sql="select * from addproduct";
					$tbl=getDatas($sql);
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr class="rem1">
						
                        <td><img src="<?php echo $tbl[$i][8];?>"  height="50" width="50"></td>
						<td class="invert"><?php echo $tbl[$i][3];?></td>
						
						<td class="invert"><?php echo $tbl[$i][1];?></td>
						
						<td class="invert"><?php echo $tbl[$i][2];?></td>
						<td class="invert"><?php echo $tbl[$i][3];?>
						
						</td> <td><a href="edit_prd.php"><font align="center" color="LightCoral" >Edit&nbsp;</font> </a></td>
                            <td><a href="rmv_prd.php?id=<?php echo $tbl[$i][0];?>"><font align="center" color="LightCoral" >Delete&nbsp; </font></a></td>
						
				
						</tr>
					<?php 
					}
					?>
					</tbody>
				
				</table>
			</div>
	<!--user-->
