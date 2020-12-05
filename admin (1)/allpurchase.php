<?php include_once("../shares/db/mydatabase.inc");?>
 <?php include("top2.php"); ?>
 <head>
<style>
    
 th{
			height: 40px;
			background-color:thistle;
			color: white;
            text-align: center;
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
	<!--user--->
<div style="position:relative;top:10px;left:180px;width:1300px;">
<div style="background-color:thistle;width:1300;height:200">
<img src="images/logo.png" height="200" width="200" style="position:relative;top:20px;left:150px;">
<div style="position:relative;top:-130px;left:1000px;"><b>Aurora Decors<br>
							Kakkanad,Ernakulam<br>
							682016<br>
							Telephone : +91 9020996500<br>
							Email : <a class="mail" href="mailto:mail@example.com">auroradecors@gmail.com</a></b></div></div>

		<h1 style="position:relative;left:580px;top:20px;color:black;font-weight:bold;"><u></u></h1>
    
    <h1 style="position:relative;left:580px;top:30px;color:black;font-weight:bold;"><u>Purchase Report</u></h1>
        

	
	<div class="checkout-right">
										<h1 style="position:relative;left:540px;top:120px;font-weight:bold;"></h1>

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
					$sql="select * from tbl_purchasechild order by cpid asc ";
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
						
						<!-- <td><a href="editprd.php?id=<?php //echo $tbl[$i][0];?>"><font align="center" color="LightCoral" >Edit&nbsp;</font> </a></td>-->
                            <!--<td><a href="rmv_item.php?id=<?php //echo $tbl[$i][0];?>"><font align="center" color="LightCoral" >Delete&nbsp; </font></a></td>-->
						
				
						</tr>
					<?php 
					}
					?>
					</tbody>
				
				</table>
			</div>
    <div style="position:relative;left:600px;top:220px;">
<input type="submit" name="sub" id="a" value="Print" onclick="fun();" size="500"/>
</div>
	<!--user-->