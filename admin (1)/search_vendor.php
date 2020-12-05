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
    td
    {text-align: center}
               th {
    background-color: thistle;
    color: black;
    height: 40px;
                   text-align: center;
}
tr{
    height: 50px;
    border-bottom: 0px solid #ddd;
    background-color: beige;
}body{
         background-image: url(images/s6.jpg);
        background-position: center;
        background-size: cover;
    }
    

    </style>
    <?php
  $name=$_POST['s_name'];
?>
 </head>
	<!--user--->
<div style="position:relative;left:550px;top:10px;">
    <form action="search_vendor"  method="POST" >
<input type="text" name="s_name" placeholder="Search By name">
    <input type="submit" value="Search">
        </form>
</div>
	
	<div class="checkout-right">
										<h1 style="position:relative;left:520px;top:120px;font-weight:bold;"> VENDOR INFORMATION</h1>

				<table border="1" style="position:relative;width:1000px;left:150px;top:160px;">
					<thead>
						<tr>
							
							<th> Name</th>
							
							<th>Street</th>
                            <th>City</th>
                            <th>District</th>
                            <th>Pincode</th>
							<th>Phone No</th>
                            <th>Email</th>
                            <th>Edit</th>
							
						
							
						</tr>
					</thead>
					<?php
					$sql="select * from vendorreg where vname='$name'";
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
						<td class="invert"><?php echo $tbl[$i][5];?>
						
						</td>
					    <td class="invert"><?php echo $tbl[$i][7];?>
                        </td>
                        <td class="invert"><?php echo $tbl[$i][2];?></td>
                        <td class="invert"><?php echo $tbl[$i][8];?>
						
						</td>
                        <td><a href="edit_vendor.php?id=<?php echo $tbl[$i][0];?>"><font color="LightCoral">Edit</font></a></td>
						</tr>
                        
                         
					<?php 
					}
					?>
					</tbody>
				
				</table>
			</div>
	<!--user-->
