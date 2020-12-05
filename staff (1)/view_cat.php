<?php include_once("../shares/db/mydatabase.inc");
include_once("top.php");
  ?>
 <head>
<style>
 table{
                   border: 0px groove;
     
                   border-radius: 8px;
                   width:1300px;
       /*border-collapse:separate;
     border-spacing: 0 10px;*/
               }
               th {
    background-color:thistle;
    color: black;
    height: 40px;
                   text-align: center;
                   text-transform: uppercase;
}
    
    td{
        text-align: center;
        border-collapse: separate;
            border-spacing: inherit
    }
    body{
        background-image: url(images/s6.jpg);
        background-position: center;
        background-size: cover;
    }
tr{
   
    height: 50px;
    border-bottom: 0px solid #ddd;
    background-color: beige;
}
    img{
        border-radius:50%;
        width:100px;
        height: 100px;
    }
    </style>
 </head>
	<!--user--->

	<div class="checkout-right">
        <h1 style="position:relative;left:530px;top:110px;color:black;font-weight:bold;">CATEGORY DETAILS</h1>

				<table border="1" style="position:relative;width:1000px;left:150px;top:160px;">
					<thead>
						<tr>
							<th>Category ID</th>
                           
                            <th>Category</th>
                            <th>Description</th>
                            
                           
                          
                            
				       </tr>
					</thead>
	<?php 

$sql="select * from category order by cid";
					$tbl=getDatas($sql);
if($tbl==null){
   echo "<div style='position:relative;top:350px;color:blue;left:620px;'>Nothing Added.......</div>";
}
else
{
?>

	
										
                    
					<?php
					
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
                          
						}
					?>
					
						<tbody><tr >
                              <td class="invert"><?php echo $tbl[$i][0];?>
                             </td>
                            <td class="invert"><?php echo $tbl[$i][1];?>
                             </td>
                            <td class="invert"><?php echo $tbl[$i][2];?>
                             </td>
                            
						
                            </tr>  
                       
						
                     
						
                      
							
                        <?php 
					}
}

					?>
					</tbody>
				
				</table>
		
	<!--user-->
