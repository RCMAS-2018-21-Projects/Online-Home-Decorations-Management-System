<?php

include_once("../shares/db/mydatabase.inc");
?>



<?php
session_start();
$user=$_SESSION['userid'];
$sql="select name from staffreg where sid=$user";
 $tbl=getDatas($sql);
include("top.php");
?>
<style>
* {
    box-sizing: border-box;
}

input[type=text],input[type=email],input[type=date] ,input[type=password],select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] ,input[type=reset]{
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    float: right;
}

input[type=submit],input[type=reset]:hover {
    background-color: #45a049;
}

.container2 {
    border-radius: 2px;
    background-color:  #ffffff00;
    padding: 20px;
    width: 50%
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 60px) {
    .col-25, .col-75, input[type=submit],input[type=reset] {
        width: 75%;
        margin-top: 0;
    }
}
 <?php
$sql="select ifnull(max(prid),0)+1 from purchase";
$tbl=getDatas($sql);
?>
<form action="" method="post" enctype="multipart/form-data">

<h1 style="position:relative;left:600px;top:90px;font-weight:bold;"> Add Purchase</h1>
    
    <table style="position:relative;top:110px;left:420px;border-collapse: separate;border-spacing: 0 15px;">
    
    <tr>
        <td>Purchase ID</td><td>
        
        <input type="text" name="pid" value="<?php echo $tbl[0][0]; ?>"required>
        </td>
        </tr>
    
      <tr><td>Vendor</td><td><select name="vnm" required > 
    <?php 
     $sql="select * from vendorreg ";
        $tbl=getDatas($sql);
    ?><?php foreach($tbl as $row) {?>
<option value="<?php echo $row['vid']; ?>"><?php echo $row['vname']; ?></option>

		
<?php 
 }
  ?>

</select></td>
</tr>
    <tr>
 <th>Date of purchase</th><td><input type="date" name="pdt" required /></td>
</tr>
<tr>
 <th>Total quantity</th><td><input type="number" name="qty" required /></td>
</tr>
<tr>
 <th>Total Amount</th><td><input type="number" name="amt" required/></td>
</tr>
<tr>
<th>Staff</th><td><input type="text" name="stf" required readonly value="<?php echo $tbl['name'];?>" /></td>
</tr>
<tr>
<th></th><td><input type="submit" value="Submit"/></td>
</tr>
</table>
</form>
	