<?php include_once("../shares/db/mydatabase.inc");?>
 <?php include("top2.php"); ?>
 <head>
<style>
    
 <style>
 th{
			height: 40px;
			background-color: thistle;
			color: black;
            text-align: center;
		}
        td{
            background-color: beige;
            text-align: center;
            height: 60px;
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
	

<link rel="stylesheet" href="file:///F|/css/print.css" type="text/css">
<script>
    function fun()
    { 
       var a=document.getElementById('a');
       a.style.visibility='hidden';
       window.print();
      
           }
    </script>

    </style>
 </head>
	<!--user--->

			<div style="position:relative;top:10px;left:180px;width:1300px;">
<div style="background-color:thistle;width:1300;height:200">
	
<img src="images/logo.png" height="200" width="200" style="position:relative;top:20px;left:150px;">
<div style="position:relative;top:-130px;left:1000px;"><b>Aurora Decors<br>
							Kakkanad,Ernakulam<br>
							682016<br>
							Telephone : +91 9020996500<br>
							Email : <a class="mail" href="mailto:mail@example.com">auroradecors@gmail.com</a></b></div></div>

		<h1 style="position:relative;left:580px;top:5px;color:black;font-weight:bold;"><u>Aurora Decors</u></h1>
		<br>
		<br>
		<br>							<h1 style="position:relative;left:520px;top:120px;font-weight:bold;">STAFF REPORT</h1>

				<table border="1" style="position:relative;width:1000px;left:150px;top:160px;">
					<thead>
						<tr>
							
							<th> Name</th>
							
							<th>City</th>
                            <th>State</th>
                            <th>Date of Birth</th>
                            <th>Email</th>
							<th>Phone No</th>
                           
							
						
							
						</tr>
					</thead>
					<?php
					$sql="select * from staffreg";
					$tbl=getDatas($sql);
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr class="rem1">
						
                      
						<td class="invert"><?php echo $tbl[$i][1];?></td>
						
						<td class="invert"><?php echo $tbl[$i][5];?></td>
						
						<td class="invert"><?php echo $tbl[$i][6];?></td>
						<td class="invert"><?php echo $tbl[$i][2];?>
						
						</td>
					<td class="invert"><?php echo $tbl[$i][8];?></td>
                        <td class="invert"><?php echo $tbl[$i][3];?></td>
                        
                        
                         
					<?php 
					}
					?>
					</tbody>
				
				</table>
			</div>
	<!--user-->
