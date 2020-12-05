<?php
include_once("../shares/db/mydatabase.inc");
 include("top2.php");
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
        background-repeat: no-repeat;
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
    border-collapse:separate;
    border-spacing:0px 15px;
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
    $sql="select * from staffreg where sid='$id'";
    $tbl=getDatas($sql);
}?>

<div class="card">
<div class="w3_login">
<div class="heading"><br><br><br><br>
    <h1 style="position:relative;left:20px;top:35px;"><center><b>EDIT STAFF</b></center></h1></div>

<form action="" method="POST" >
    
    <table  align="center" style="position: relative;left:10px;top:45px;">
			<div id="err" style="color: red;height: 10px"></div>

            
           <td>Name</td>
        <td><input type="text" name="name" value="<?php echo $tbl[0][1];?>" id="fname"required onblur="Validatename1()";></td>  <label class="errortext" style="display:nne; color:red" id="name_1"></label><br>
                                         <script>
                                        function Validatename1()
                                            {
                                                  var val = document.getElementById('fname').value;
                                                  if (!val.match(/^[A-Za-z][A-Za-z" "]{0,}$/))
                                                  {
                                                      $("#name_1").html(' Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                      document.getElementById('fname').style.border="1px solid red"; 
                                                      document.getElementById('fname').value = "";
                                                      return false;
                                                  }
                                                  else{
                                                    document.getElementById('fname').style.border="1px solid green";
                                                    return true;
                                                  }
                                                  
                                              }
                                              </script>    
    
    
    </tr>
                    
               
        <script  src="css/jquery.js" type="text/javascript"></script>
     <script  src="css/jquery-ui.js" type="text/javascript"></script>
    <link href="css/jquery-ui.css"    rel="stylesheet" type="text/css">
          
        
                
                     <!-- <tr>
                    <td>
                        <label>Company Name</label>
                    </td>
                    <td>
                       <input type="text" name="vendor_cmpny" value="<?php echo $tbl[0][2];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>-->
                      
                
                <tr>
                    <td>
                        <label>City</label>
                    </td>
                    <td>
                       <input type="text" name="city" value="<?php echo $tbl[0][5];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           
                
                     <tr>
                    <td>
                        <label>State</label>
                    </td>
                    <td>
                       <input type="text" name="state" value="<?php echo $tbl[0][6];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           
                
                      <!--<tr>
                    <td>
                        <label>District</label>
                    </td>
                    <td>
                       <input type="text" name="vdistrict" value="<?php echo $tbl[0][5];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>-->
        
       <tr>
                    <td>
                        <label>Date of Birth</label>
                    </td>
                    <td>
                       <input type="date" name="dob"  max="2000-01-01"       
 value="<?php echo $tbl[0][2];?>" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
        
                   
    <tr>
        <tr>
    <td>Phone</td>
        <td><input type="text" name="phone"id="mbno"maxlength="10" value="<?php echo $tbl[0][3];?>"  required onblur="Validatep()";></td> <label class="errortext" style="display:none; color:red" id="mobile_1"></label>
                                              <script>
                                              function Validatep()
                                              {
                                                  var val = document.getElementById('mbno').value;
                                                  if (!val.match(/^[7-9][0-9]{9,9}$/))
                                                  {
                                                  $("#mobile_1").html('Must. 10 and Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                   document.getElementById('mbno').style.border="1px solid red"; 
                                                  document.getElementById('mbno').value = "";
                                                      return false;
                                                  }
                                                  else
                                                  {
                                                      document.getElementById('mbno').style.border="1px solid green"; 

                                                     return true;
                                                  }
                                                 
                                              }
                                              </script>     
    </tr>
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
    <center><input style="position:relative;left:50px;top:50px;" type="submit" value="UPDATE"><br><br></center>
                    
    </form>  
            </div>
            
       
                                   </div>
    <?php           
		
    if(isset($_POST['name']))
        {
		$a=$_POST['name'];
        //$b=$_POST['vendor_cmpny'];
		$c=$_POST['city'];
        $d=$_POST['state'];
        //$e=$_POST['vdistrict'];
        $h=$_POST['dob'];
         $f=$_POST['phone'];
         //$g=$_POST['email'];
            
		$sql="update staffreg set name='$a',city='$c',state='$d',dob='$h',phone='$f' where sid='$id'";
		setDatas($sql);
		msgbox("updated");
        nextpage("view_staff.php");
        }
        
        ?>