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
<body>
    <h1 style="position:relative;left:540px;top:120px;font-weight:bold;">CATEGORY DETAILS</h1>
				<table border="1" style="position:relative;width:1000px;left:150px;top:160px;">

					<thead>
						<tr>
						 <th>Category ID</th>
                            <th>Category Name</th>
                             <th>Details</th>
                
                            <th>Edit</th>
                            <th>Delete</th>
                            
    
				       </tr>
					</thead>
					<?php
					$sql="select * from category order by cid asc";
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
                          <td><?php echo $tbl[$i][2];?></td>
                       
                        <td><a href="editcat.php?id=<?php echo $tbl[$i][0];?>"><font color="LightCoral"> Edit</font></a>
                                                       <td><a href="rmv_cat.php?id=<?php echo $tbl[$i][0];?>"><font color="LightCoral" >Delete </font></a></td>
                      </td>
					<?php 
					}
					?>
					</tbody>
				
				</table>
</body>
	<!--user-->
<?php
if(isset($_GET['a'])){
    $p=$_GET['a'];
    $sql="UPDATE`tbl_doctor`SET status='Inactive' WHERE did='$p'  ";
    setDatas($sql);
    $sql="select email from tbl_doctor where did='$p'";
    $tbl=getDatas($sql);
     $eml=$tbl[0][0];
     $sql="UPDATE`tbl_login`SET status='Inactive' WHERE username='$eml'  ";
    setDatas($sql);
    nextpage('viewdoc.php');
    }