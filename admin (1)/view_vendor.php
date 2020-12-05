<?php include_once("../shares/db/mydatabase.inc");
include_once("top2.php");
  ?>
 <head>
	 
	 <script type="text/javascript">
       history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
    </script>
	 
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
}body{
         background-image: url(images/s6.jpg);
        background-position: center;
        background-size: cover;
    }
    

    </style>
 </head>
	<!--user--->
<div style="position:relative;left:550px;top:50px;">
    <form action="search_vendor.php" method="POST" >
<input type="text" name="s_name" placeholder="Search By name">
    <input type="submit" value="Search">
        </form>
</div>
	
	<div class="checkout-right">

										<h1 style="position:relative;left:540px;top:120px;font-weight:bold;">Vendor Details</h1>

<div class="card">
				<table border="1" style="position:relative;width:1000px;left:150px;top:160px;">
					<thead>
						<tr>
							<th>VENDOR ID</th>
                            <th>NAME</th>
                        
                            <th>STREET</th>
                            <th>CITY</th>
                            <th>DISTRICT</th>
                            <th>PINCODE</th>
                            <th>PHONE NUMBER</th>
                            <th>EMAIL</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                           
				       </tr>
					</thead>
					<?php
					$sql="select * from vendorreg order by vid asc";
					$tbl=getDatas($sql);
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
					?>
					<tbody><tr >
						<td><?php echo $tbl[$i][0];?></td>
						<td><?php echo $tbl[$i][1];?></td>
                        <td><?php echo $tbl[$i][3];?></td>
                        <td><?php echo $tbl[$i][4];?></td>
                        <td><?php echo $tbl[$i][5];?></td>
                        <td><?php echo $tbl[$i][7];?></td>
                        <td><?php echo $tbl[$i][2];?></td>
                        <td><?php echo $tbl[$i][8];?></td>
                   
                        <td><a href="edit_vendor.php?id=<?php echo $tbl[$i][0];?>"><font color="LightCoral">Edit</font></a></td>
                        <td><a href="rmv_vendor.php?id=<?php echo $tbl[$i][0];?>"><font color="LightCoral">Delete</font></a></td>
                   
						
					<?php 
					}
					?>
					</tbody>
				
				</table>
		</div>
	<!--user-->
