<?php

include_once("../shares/db/mydatabase.inc");
?>



<?php
$user=$_SESSION['userid'];
include("top.php");
?>
<style>
    body{
        background:url(images/q2.jpg) no-repeat top fixed ;
        background-size:cover;}
* {
    box-sizing: border-box;
}

input[type=text],input[type=email],input[type=date] ,input[type=password],select, textarea {
    width: 150%;
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
</style>

    <?php
$sql="select ifnull(max(vid),0)+1 from vendorreg";
$tbl=getDatas($sql);
$vid=$tbl[0][0];

?>
<body>
    <div class="s1">
    <div style="position:relative;top:10px;">
        <br>
        <br>
<center>
<h1><b>ADD VENDOR</b></h1>
<form action="" method="post">
<table style="position:relative;top:50px;left:-10px;border-collapse: separate;border-spacing: 0 15px;">
<tr>
<td>
<label>VENDOR ID:</label></td> 
<td>    
    <input type="text" name="vendor_id" value="<?php echo $vid;?>" readonly="">
    </td></tr>

    <tr>
<tr>
<td>
<label>VENDOR NAME:</label></td> 
<td><input type="text" name="vendor_name" placeholder="Enter your First Name here" id="name" required></td></tr>
	
<tr>	<td> <p id="p0" style="position:relative;color:red;"></p></td>
                 <script>
                 $("#name").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]{3,50}$') ) {
       $('#p0').hide();
    } else {
         $('#p0').show();
       $('#p0').text("* please enter a valid  name *"); 
         $('#name').focus(); 
    }
  
});
    </script>  </tr>

    <tr>
<td>
<label>STREET:</label></td>
 <td><input type="text" name="v_street" required></td></tr>
<tr>
<td>
<label>CITY:</label></td>
 <td><input type="text" name="v_city" required></td></tr>
    <tr>
<td>
<label>DISTRICT:</label></td>
 <td><input type="text" name="v_district" required></td></tr>
    <tr>
<td><label>STATE:</label></td>
<td><input type="text" name="v_state" required></td>
</tr>
    <tr>
<td>
<label>PIN CODE:</label></td> 
<td><input type="text" name="vendor_pin" maxlength="6" placeholder="Enter your pincode here" pattern=".{6}"title="Must contain 6 digits only" required  ></td></tr>
<tr>
<td>
<label>PHONE NUMBER:</label></td> 
<td><input type="text" name="vendor_ph"  placeholder="Enter your mobile number here" pattern=".{10}"title="Must contain 10 digits only" required onkeypress="return verifyPhone(this,event,'err')" ></td></tr>
<tr>
<td>
<label>EMAIL:</label></td>
<td><input type="email" name="vendor_email" data-error="Valid email is required." id="email" placeholder="myname@example.com" required></td></tr><tr>
<td>
	<p id="p8" style="color:red;height:20px"></p>
       <script>
                 $("#email").on("blur", function() {
    if ( $(this).val().match('^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z0-9]{2,4})+$') ) {
       $('#p8').hide();
    } else {
         $('#p8').show();
       $('#p8').text("*  Please enter valid email  *");
        $("#email").focus();
        
    }
});
    </script></td>
</tr>
	
    <tr>
    <td>
    <input type="submit" name="submit" value="ADD">
        </td>
    </tr>
</table>
    </form>
</center>
   </div>
    </div>
</body>
</html>

<?php
 if(isset($_POST['vendor_id']))
 {
$a=$_POST['vendor_id'];
$b=$_POST['vendor_name'];    
$c=$_POST['v_street'];
$d=$_POST['v_city'];
$e=$_POST['v_district'];
     $i=$_POST['v_state'];
$g=$_POST['vendor_email'];
$f=$_POST['vendor_pin']; 
 $h=$_POST['vendor_ph']; 
     $i=$_POST['user'];
	 //$i=$_POST['date']; 
    //echo $f;
	 $sql="select email from vendorreg where email='$g'";
	 $tbl=getDatas($sql);
	 if($tbl==null){
$sql="insert into vendorreg values('$a','$b','$h','$c','$d','$e','$s','$f','$g','$i')";
		setDatas($sql);
		/* $sql="select ifnull(max(brand_id),0)+1 from tbl_brand";
$tbl=getDatas($sql);
$bid=$tbl[0][0];
     $sql="insert into tbl_brand values('$bid','$f','$a')";
setDatas($sql);*/
		msgbox('Successfully added');
}
	 else{
		 msgbox('vendor details exist...');
	 }
 }
?>
