<?php 
include_once("../shares/db/mydatabase.inc");
include("top.php");
?>
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
	echo $txtStartDate;
	
    $query="select * from userreg where j_date between'$txtStartDate'and'$txtEndDate' order by j_date";
    $tbl=getDatas($query);
    
if($tbl==null){
   echo "<div style='position:relative;top:150px;color:blue;left:620px;'>NO CUSTOMER JOINED BETWEEN THESE DATES...</div>";
}
	else{
        ?>
	
	<div style="position:relative;top:10px;left:20px;width:1300px;">
<div style="background-color:thistle;width:1300;height:200">
<img src="images/logo.png" height="200" width="200" style="position:relative;top:20px;left:150px;">
<div style="position:relative;top:-130px;left:1000px;"><b>Aurora Decors<br>
							Kakkanad,Ernakulam<br>
							682016<br>
							Telephone : +91 9020996500<br>
							Email : <a class="mail" href="mailto:mail@example.com">auroradecors@gmail.com</a></b></div></div>

		
		<br>
		<br>
		<br>
<div style="position:relative;left:100px;top:40px">
		<label>
			<font color="purple">Date From : </font>
		</label>   <?php echo $txtStartDate;?>
		<br><br>
		<label>
			<font color="purple">Date To:</font>
		</label>   <?php echo $txtEndDate;?>
</div>
		

	
						
	
									
<h2 style="position:relative;left:550px;top:10px;"><b>CUSTOMER REPORT</b></h2>
				<table border="1" style="position:relative;width:1200px;left:50px;top:-40px;">
					<thead>
						<tr>
								<th> NAME</th>
							
							<th>HOUSE NAME</th>
                            <th>PHONE NO</th>
                            <th>CITY</th>
                         
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
						
						<td><?php echo $tbl[$i][3];?></td>
						
						<td><?php echo $tbl[$i][2];?></td>
						<td><?php echo $tbl[$i][4];?>
						
						</td>
				
                        <td><?php echo $tbl[$i][7];?></td>
						</tr>
					<?php 
					}
	

					?>
										
<!--<div style="position:relative;left:950px;top:480px">
	<label>Signature</label>
</div>-->
<div style="position:relative;left:600px;top:500px;">
<input type="submit" name="sub" id="a" value="Print" onclick="fun();" size="500"/>
</div>
						<?php
}
}
					     ?>
					</tbody>
				
				</table>