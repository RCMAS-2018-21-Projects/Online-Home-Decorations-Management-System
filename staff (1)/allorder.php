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
 $query="select * from tbl_ordermaster order by o_date";
    $tbl=getDatas($query);
if($tbl==null){
 echo "<div style='position:relative;top:150px;color:purple;left:620px;'>NO ORDERS YET...</div>";
}
else{
        ?>
	<!--user--->

	<div style="position:relative;top:10px;left:20px;width:1300px;">
<div style="background-color:thistle;width:1300;height:200">
<img src="images/logo.png" height="200" width="200" style="position:relative;top:20px;left:150px;">
<div style="position:relative;top:-130px;left:1000px;"><b>Aurora Decors<br>
							Kakkanad,Ernakulam<br>
							682016<br>
							Telephone : +91 9020996500<br>
							Email : <a class="mail" href="mailto:mail@example.com">auroradecors@gmail.com</a></b></div></div>

		
        <h1 style="position:relative;left:580px;top:30px;color:black;font-weight:bold;"><u>Order Report</u></h1>

				<table border="1" style="position:relative;width:1000px;left:150px;top:160px;">
						<thead>
						<tr>
							<th>Order Id</th>
                            <th>Customer Name</th>
                            <th>Products</th>
                            <th>Total Amount </th>
                            <th>Order Date</th>
                             <th>Status</th>
                           
                           
                           
				       </tr>
					</thead>
					<?php
					
					for($i=0;$i<count($tbl);$i++)
					{
						for($j=0;$j<count($tbl[$i]);$j++)
						{
						}
                        $u=$tbl[$i][1];
                        $ss="select * from userreg where email='$u'";
                        $ts=getDatas($ss);
                        ?>
					<tbody><tr >
						
						<td><?php echo $tbl[$i][0];?></td>
                        <td><?php echo $ts[0][1];?></td>
                        <td>
                        <?php
                        $ii=$tbl[$i][0];                        $sn="select pname from tbl_orderchild where om_id='$ii' group by pname";
                        $f=getDatas($sn);
                        for($a=0;$a<count($f);$a++)
					    {
						for($b=0;$b<count($f[$a]);$b++)
						{
						}
                            echo $f[$a][0];echo "<br>";
                        }
					    ?>
                        </td>
                        
                        <td><?php echo $tbl[$i][3];?></td>
                        <td><?php echo $tbl[$i][2];?></td>
                        <td><?php echo $tbl[$i][4];?></td>
                       
						</tr>
					<?php 
					}
					?>
					</tbody>
				
				</table>
			</div>
	<!--user--><div style="position:relative;left:600px;top:220px;">
<input type="submit" name="sub" id="a" value="Print" onclick="fun();" size="500"/>
</div>
<?php
}
?>