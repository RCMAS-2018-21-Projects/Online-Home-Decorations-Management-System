<?php include_once("../shares/db/mydatabase.inc");?>
 <?php include("top.php"); ?>
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
	<!--user--->

	<div style="position:relative;top:10px;left:20px;width:1300px;">
<div style="background-color:thistle;width:1300;height:200">
<img src="images/logo.png" height="200" width="200" style="position:relative;top:20px;left:150px;">
<div style="position:relative;top:-130px;left:1000px;"><b>Aurora Decors<br>
							Kakkanad,Ernakulam<br>
							682016<br>
							Telephone : +91 9020996500<br>
							Email : <a class="mail" href="mailto:mail@example.com">auroradecors@gmail.com</a></b></div></div>

		
        <h1 style="position:relative;left:580px;top:30px;color:black;font-weight:bold;"><u>Customer Report</u></h1>

				<table border="1" style="position:relative;width:1000px;left:150px;top:160px;">
					<thead>
						<tr>
							
							<th> Name</th>
							
							<th>Home Name</th>
                            	<th>City</th>
							
                            	<th>Pincode</th>
                            <th>Email</th>
							<th>phone No</th>
							
						
							
						</tr>
					</thead>
					<?php
					$sql="select * from userreg";
					$tbl=getDatas($sql);
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr class="rem1">
						
						<td class="invert"><?php echo $tbl[$i][1];?></td>
						
						<td class="invert"><?php echo $tbl[$i][3];?></td>
						
						<td class="invert"><?php echo $tbl[$i][4];?></td>
						<td class="invert"><?php echo $tbl[$i][6];?></td>
					    <td class="invert"><?php echo $tbl[$i][7];?></td>
                        <td class="invert"><?php echo $tbl[$i][2];?></td>
						</tr>
					<?php 
					}
					?>
					</tbody>
				
				</table>
			</div>
	<!--user--><div style="position:relative;left:600px;top:500px;">
<input type="submit" name="sub" id="a" value="Print" onclick="fun();" size="500"/>
</div>