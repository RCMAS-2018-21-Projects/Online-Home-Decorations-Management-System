<?php include_once("../shares/db/mydatabase.inc");
include_once("top2.php");
  ?>
 <head>
<style>
    
 table{
                   border: 0px groove;
                   border-radius: 8px;
                   width:1300px;
       border-collapse:collapse;
               }
               th {
    background-color:thistle;
    height: 40px;
                   color: black;
    text-align: center;
    text-transform: uppercase;
}
    
    td{
        text-align: center;
        background-color: beige;
    }
    body{
         background-image: url(images/s6.jpg);
        background-position: center;
        background-size: cover;
    }
tr{
   
    height: 50px;
    border-bottom: 0px solid #ddd;
}
    img{
        border-radius:50%;
        width:100px;
        height: 100px;
    }
    </style>
 </head>
	<!--user--->

	
	<?php 

$sql="select * from subcategory order by sid asc";
					$tbl=getDatas($sql);
if($tbl==null){
   echo "<div style='position:relative;top:350px;color:blue;left:620px;'>Nothing Added.......</div>";
}
else
{
?>

	
										<h1 style="position:relative;left:540px;top:120px;font-weight:bold;">SUBCATEGORY DETAILS</h1>

				<table border="1" style="position:relative;width:1000px;left:150px;top:160px;">
					<thead>
						<tr>
							
                           <th>SubCategory ID</th>
                           
                            <th>Category</th>
                            <th>SubCategory</th>
                            <th>Description</th>
                            <th></th><th></th>
                            
                            
				       </tr>
					</thead>
					<?php
					
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr >
                              <td><?php echo $tbl[$i][0];?>
                             </td>
                            <td><?php echo $tbl[$i][1];?>
                             </td>
                            <td><?php echo $tbl[$i][2];?>
                                </td>
                                 <td><?php echo $tbl[$i][3];?>
                             </td>
                        <td><a href="edit_scat.php?id=<?php echo $tbl[$i][0];?>"><font color="LightCoral">Edit</font></a>
                      </td>
                            <td><a href="rmv_scat.php?id=<?php echo $tbl[$i][0];?>"><font color="LightCoral" >Delete </font></a></td>
						
                             
                            </tr>  
                       
						
                     
                        <?php 
					}
}

					?>
					</tbody>
				
				</table>
		
	<!--user-->
