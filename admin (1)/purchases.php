<?php include_once("../shares/db/mydatabase.inc");?>
 <?php include("top2.php"); ?>
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
    body{
        background-image: url(images/23.jpg);
        background-position: center;
        background-size: cover;
    }

    </style>
    <?php
    $fdate=$_POST['sdate'];
     $edate=$_POST['edate'];
     ?>
 </head>
	<!--user--->
<form method="post" action="purchases.php">
    <center>
       
<div style="position:relative;top:50px;border-collapse:seperate;border-spacing:0px 15px;">
 
     <label style="position:relative;top:-40px;left:100px;">FROM DATE</label>
    <input type="date" name="sdate" placeholder="From date">
    <label style="position:relative;top:-40px;left:100px;">TO DATE</label>
     <input type="date" name="edate" value="To date">
                <input style="height:40px;" type="submit" name="search" value="Search">
        </div></center></form>
	
	<div class="checkout-right">
										<h1 style="position:relative;left:540px;top:120px;font-weight:bold;">Purchased Items </h1>

				<table border="1" style="position:relative;width:1000px;left:150px;top:160px;">
					<thead>
						<tr>
							<th style="width:150px;">Purchase ID</th>
                              <th style="width:150px;">Product ID  </th>
							<th style="width:150px;"> Name</th>
							<th style="width:150px;">Vendor</th>
                            <th style="width:150px;">Purchase Date</th>
							<!--<th></th>
                            
                            <th>Description</th>-->
                            <th style="width:150px;">Quantity</th>
                            <th style="width:150px;">Price</th>
                            <th style="width:150px;">Total Amount</th>
                            <th>  </th>
                            <th>  </th>
                           
							
						
							
						</tr>
					</thead>
					<?php
					$sql="select * from tbl_purchasechild where pdate between '$fdate'and'$edate' order by pdate ";
					$tbl=getDatas($sql);
                   
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
                   
					<tbody><tr class="rem1">
						
                    
						<td class="invert"><?php echo $tbl[$i][0];?></td>
						
						<td class="invert"><?php echo $tbl[$i][2];?></td>
						
						<td class="invert"><?php echo $tbl[$i][3];?>
                        </td>
                        <?php
                        $v=$tbl[$i][6];
                        $sql="select * from vendorreg where vid='$v'";
                        $tb=getDatas($sql);
                        $vn=$tb[0][1];
                        ?>
                        <td class="invert"><?php echo $tb[0][1];?>
                        </td>
                         <td class="invert"><?php echo $tbl[$i][7];?>
                        </td>
                        <td class="invert"><?php echo $tbl[$i][4];?>
                        </td>
                        <td class="invert"><?php echo $tbl[$i][5];?>
                        </td>
						 <td class="invert"><?php echo $tbl[$i][8];?>
                        </td>
						
						
				
						</tr>
					<?php 
					}
					?>
					</tbody>
				
				</table>
			</div>
	<!--user-->
