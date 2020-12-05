<?php 
include_once("../shares/db/mydatabase.inc");
include("top2.php");
?>
 <head>
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
		<?php
		if(isset($_POST['search']))
{
    $txtStartDate=$_POST['txtStartDate'];
    $txtEndDate=$_POST['txtEndDate'];
	//echo $txtStartDate;
	
    $query="select * from staffreg where staff_doj between'$txtStartDate'and'$txtEndDate' order by staff_doj";
    $tbl=getDatas($query);
    
if($tbl==null){
   echo "<div style='position:relative;top:150px;color:blue;left:620px;'>NO STAFF JOINED BETWEEN THESE DATES...</div>";
}
	else{
        ?>
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
		<br>
<div style="position:relative;left:100px;top:40px">
		<!--<label>
			<font color="purple">Date From : </font>
		</label>   <?php echo $txtStartDate;?>
		<br><br>
		<label>
			<font color="purple">Date To:</font>
		</label>   <?php echo $txtEndDate;?>-->
</div>
		

	
									
<h2 style="position:relative;left:590px;top:10px;"><b>STAFF REPORT</b></h2>
				<table border="1" style="position:relative;width:1000px;left:50px;top:-50px;">
					<thead>
						<tr>
								<th> NAME</th>
							
							<th>DATE OF BIRTH</th>
                            <th>PHONE</th>
                            <th>EMAIL</th>
                           
							
							
							
						</tr>
					</thead>
					<?php
					
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr>
						<td><?php echo $tbl[$i][1];?></td>
						
						<td><?php echo $tbl[$i][2];?></td>
						
						<td><?php echo $tbl[$i][3];?></td>
						<td><?php echo $tbl[$i][8];?>
						
						</td>
					
						</tr>
                    
					<?php 
					}
	

					?>
                        <div style="position:relative;left:950px;top:480px">
	<label>Signature</label>
</div>
<div style="position:relative;left:600px;top:500px;">
<input type="submit" name="sub" id="a" value="Print" onclick="fun();" size="500"/>
</div>
										

                        </div></tbody></table>
                    </div>                 
						<?php
}
}
					     ?>
					</tbody>
				
				</table>