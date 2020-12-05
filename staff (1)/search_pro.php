<?php include_once("../shares/db/mydatabase.inc");?>
 <?php include("top.php"); ?>
 <head>
<style>
    input
    {
        height:50px;
        
    }
  input[type=text]
    {
         width:400px;
    }
 table{
                   border: 0px solid lightgray;
                   border-radius: 1em;
                   width: 1500px;
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
    height: 120px;
    width: 1500px;
    border-bottom: 0px solid #ddd;
    background-color: beige;
}
    td
    {
      width: 500px;  
    }

    </style>
    <?php
    $nm=$_POST['pname'];
    ?>
 </head>
	<!--user--->
	<div style="position:relative;left:550px;top:50px;">
    <form action="search_pro.php" method="POST" >
<input type="text" name="pname" placeholder="Search By name">
    <input type="submit" value="Search">
        </form>
</div>
	<div class="checkout-right">
										<h1 style="position:relative;left:640px;top:120px;font-weight:bold;">Product Details</h1>

				<table border="1" style="position:relative;width:1500px;left:120px;top:160px;">
					<thead>
						<tr>
							<th>Image</th>
							<th> Name</th>
							
							<th>Category</th>
                            <th>Sub Category</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>  </th>
                            <th>  </th>
                           
							
						
							
						</tr>
					</thead>
					<?php
					$sql="select * from addproduct where pname='$nm'";
					$tbl=getDatas($sql);
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr class="rem1">
						
                        <td><img src="<?php echo $tbl[$i][7];?>"  height="110" width="110"></td>
						<td class="invert"><?php echo $tbl[$i][3];?></td>
						
						<td class="invert"><?php echo $tbl[$i][1];?></td>
						
						<td class="invert"><?php echo $tbl[$i][2];?>
                        </td>
                        <td width="700px"class="invert"><?php echo $tbl[$i][6];?>
                        </td>
                        <td class="invert"><?php echo $tbl[$i][4];?>
                        </td>
						<td class="invert"><?php echo $tbl[$i][5];?>
						
						</td> <td><a href="editprd.php?id=<?php echo $tbl[$i][0];?>"><font align="center" color="LightCoral" >Edit&nbsp;</font> </a></td>
                            <td><a href="rmv_prd.php?id=<?php echo $tbl[$i][0];?>"><font align="center" color="LightCoral" >Delete&nbsp; </font></a></td>
						
				
						</tr>
					<?php 
					}
					?>
					</tbody>
				
				</table>
			</div>
	<!--user-->
