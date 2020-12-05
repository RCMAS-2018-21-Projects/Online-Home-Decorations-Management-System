<?php session_start();
$user=$_SESSION['userid'];
 include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>


<html>
<head>
<style>
  
   
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 0px solid lightgray;
    font-size: 20px;
    font-weight: bold;
  padding: 20px;
}

#customers tr:nth-child(even){
    color: #816263;
    background-color:beige;}

#customers tr:hover {background-color: lightgray;}

#customers th {
  padding-top: 20px;
  padding-bottom: 20px;
  text-align: left;
  
  background-color:thistle;
  color: #816263;
}
    tr
    {
        background-color: beige;
    }
  s2
    {
        color: green;
    }
    body
    {
        background-image: url(images/b6.jpg);
        background-size:cover;
        background-position: center;
    }
    h3
    {
        color:black;
        font-size: 40px;
    }
    
</style>
</head>
<br><br><br><br><br>
<h1 style="position: relative;top:-40px;left:630px;"><b>My Shopping Bag</b> </h1> 
    <br>
    <br>

<?php
$db= " select sum(t_amnt),sum(num) from tbl_cart where buyer='$user' and pay_status='null' ";
$t=getDatas($db);
  if($db==null){
									echo "<div style='position:relative;top:250px;left:620px;'><font color='red'>No Items in the cart ...</font></div>";

}
else
{  
for($i=0;$i<count($t);$i++)
		{
			
			for($j=0;$j<count($t[$i]);$j++)
			{
			
			}
$total= $t[$i][0];
            $number= $t[$i][1];
		}
?>
    <div style="position:relative;left:20px;">
				<center><table id="customers" style="position;relative;left:150px;top:160px;width:1200px;">
					<thead>
						<tr>
							
							<th>PRODUCT</th>
							<th>PRODUCT NAME</th>
                            <th>QUANTITY</th>
                            <th>PRICE</th>
                          
							<th></th>
						</tr>
					</thead>

<?php
$db="select *,sum(t_amnt),sum(num) from tbl_cart where buyer='$user' and pay_status='null'  group by prdt_name";
$tbl=getDatas($db);
for($i=0;$i<count($tbl);$i++)
		{
			
			for($j=0;$j<count($tbl[$i]);$j++)
			{
			
			}
		
			
	?>
	
				<tbody><tr class="rem1">
						<td class="invert-image"><?php echo "<img src='".$tbl[$i][7]."'style='position:relative;width:200px;height:200px;'"?></td>
						<td class="invert">
                            <?php echo $tbl[$i][3];?></td>
                   
						<td class="invert"><?php echo $tbl[$i][11];?></td>
						<td class="invert">
							 <?php echo $tbl[$i][10];?>
						</td>
                    
						<td><a href="rmv_prd.php?id=<?php echo $tbl[$i][0];?>"><font color="LightCoral" >Remove</font> </a></td>
						
						</tr>
	
	<?php 
					}
}
					?>
					<tr><td></td><td></td><td>TOTAL</td><td><?php echo $total;?> </td><td></td></tr>
                    <tr ><td></td><td></td><td></td><td></td><td><!--<a href="confirm1.php?tot=<?php echo $total;?> & no=<?php echo $number;?>"><B><font color="black">PROCEED TO CHECKOUT</font></B></a></td></tr>-->
                    <a href="confirm.php?tot=<?php echo $total;?> & no=<?php echo $number;?>"><B><font color="black">PROCEED TO CHECKOUT</font></B></a>
					




</tbody>
			
                    
                    </table></center>
			

