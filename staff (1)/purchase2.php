<?php 
include_once("../shares/db/mydatabase.inc");
include("top.php");
?>
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
    body{
        background-image: url(images/23.jpg);
        background-position: center;
        background-size: cover;
    }

    </style>
 
	<!--user--->
	
	<div class="checkout-right">
										<h1 style="position:relative;width:;left:558px;top:150px;font-weight:bold;">ADD PURCHASE </h1>







<div class="card">
				<table border="1" style="position:relative;width:1000px;left:150px;top:260px;">
					<thead>
						<tr>
                            <th>PRODUCT ID</th>
                            <th>PRODUCT NAME</th>
            
                            <th></th>
                            
				       </tr>
					</thead>
					<?php
					$sql="select * from addproduct order by pid asc";
					$tbl=getDatas($sql);
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr >
                        <td><?php echo $tbl[$i][0];?></td>
						<td><?php echo $tbl[$i][3];?></td>
						
                   
                        <td><a href="puritem.php?id=<?php echo $tbl[$i][0];?>"class="ss" >Purchase</a></td>
                       
					<?php 
					}
					?>
					</tbody>
				
				</table>
		</div>
	<!--user-->
