<?php
include_once("../shares/db/mydatabase.inc");
 include("top.php");
?>
<head>
	<script type="text/javascript">
       history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
    </script>
<script src="maha.js"></script>
<style>

input[type=text],input[type=email],input[type=date],input[type=time],input[type=password],select
{
	border-radius:3px;
	height:50px;
	width:300px;
}
    body{
        background-image: url(images/zzz.jpg);
        background-position: center;
        background-size: cover;
    }

input[type=submit],input[type=reset]
{
	background-color:#4CAF50;
	color:white;
	border:none;
    border-radius: 2px;
	width:70px;
	height:50px;
}
input[type=submit]:hover,input[type=reset]:hover
{
	background-color:#45a049;
}
table
{
	border-radius:3px;
	height:200px;
	cellspacing:300px;
	cellpadding:200px;
}
textarea
{
	border-radius:4px;
	height:50px;
	width:300px;
}


</style>
</head>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="select * from vendorreg where vid='$id'";
    $tbl=getDatas($sql);
}?>

<div class="card">
<div class="w3_login">
<div class="heading"><br><br>
    <h1><center>EDIT VENDOR</center></h1></div>

<form action="" method="POST" >
    
    <table  align="center" style="position: relative;left:100px;top:5px">
			<div id="err" style="color: red;height: 10px"></div>

            
           <tr><td></td></tr>
                <tr>
                    <td>
                        <label>Vendor Name</label>
                    </td>
                    <td>
                       <input type="text" name="vname" value="<?php echo $tbl[0][1];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
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
                
        <script  src="css/jquery.js" type="text/javascript"></script>
     <script  src="css/jquery-ui.js" type="text/javascript"></script>
    <link href="css/jquery-ui.css"    rel="stylesheet" type="text/css">
           <tr><td></td></tr>
                 
                     <!-- <tr>
                    <td>
                        <label>Company Name</label>
                    </td>
                    <td>
                       <input type="text" name="vendor_cmpny" value="<?php echo $tbl[0][2];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>-->
                <tr><td></td></tr>       
                
                <tr>
                    <td>
                        <label>Street</label>
                    </td>
                    <td>
                       <input type="text" name="vstreet" value="<?php echo $tbl[0][3];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                     <tr>
                    <td>
                        <label>City</label>
                    </td>
                    <td>
                       <input type="text" name="vcity" value="<?php echo $tbl[0][4];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr> 
                
                      <tr>
                    <td>
                        <label>District</label>
                    </td>
                    <td>
                       <input type="text" name="vdistrict" value="<?php echo $tbl[0][5];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
        
        <tr>
                    <td>
                        <label>Pincode</label>
                    </td>
                    <td>
                       <input type="text" name="pincode" value="<?php echo $tbl[0][7];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
        
                   <tr>
                    <td>
                        <label>Phone Number</label>
                    </td>
                    <td>
                       <input type="text" name="vphone" value="<?php echo $tbl[0][2];?>"onkeypress="return verifyPhone(this,event,'err')" onblur="return varifyLength(this,'err',10,10);" />
                      </td>
                </tr>
        <tr><td></td></tr> 
                
                      <!--<tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                       <input type="text" name="email" value="<?php echo $tbl[0][8];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>-->
        
                
                
            </table>
            <br>
    <center><input type="submit" value="UPDATE"><br><br></center>
                    
    </form>  
            </div>
            
       
                                   </div>
    <?php           
		
    if(isset($_POST['vname']))
        {
		$a=$_POST['vname'];
        //$b=$_POST['vendor_cmpny'];
		$c=$_POST['vstreet'];
        $d=$_POST['vcity'];
        $e=$_POST['vdistrict'];
        $h=$_POST['pincode'];
         $f=$_POST['vphone'];
         //$g=$_POST['email'];
            
		$sql="update vendorreg set vname='$a',vstreet='$c',vcity='$d',vdistrict='$e',pincode='$h',vphone='$f' where vid='$id'";
		setDatas($sql);
		msgbox("updated");
        }
        
        ?>