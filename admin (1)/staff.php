<?php

include_once("../shares/db/mydatabase.inc");
?>



<?php
include("top2.php");
?><style>
   body{
        background:url(images/q2.jpg) ;
        background-size:cover;
       background-position: center;
         background-repeat: no-repeat;}
    }

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
    td
    {
        font-weight: bold;
    }
   

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
    /*td{
        color:aliceblue;
    }*/

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




<form action="" method="post">
<table style="position:relative;top:5px;left:420px;border-collapse: separate;border-spacing: 0 15px;">
    
    <h1 style="position:relative;left:500px;top:60px;font-weight:bold;">ADD STAFF </h1>
    
    <tr>
    <td>Name</td>
        <td><input type="text" name="name" id="fname"required onblur="Validatename1()";></td>  <label class="errortext" style="display:nne; color:red" id="name_1"></label><br>
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
    
    <tr>
        <tr>
    <td>Date Of Birth</td>
        <td>
        <input type="date" name="dob" id="sdob"required max="2000-01-01" onblur="checkDOB()";>
        </td>
    
    
    
    </tr>
    
    
    
    
    
    
    
     <tr>
    <td>Phone</td>
        <td><input type="text" name="phone"id="mbno"maxlength="10"   required onblur="Validatep()";></td> <label class="errortext" style="display:none; color:red" id="mobile_1"></label>
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
    
     <tr>
    <td>House Name</td>
        <td><input type="text" name="housename" id="hname"required onblur="Validatename3()";></td> <label class="errortext" style="display:nne; color:red" id="name_3"></label><br>
                                         <script>
                                        function Validatename3()
                                            {
                                                  var val = document.getElementById('hname').value;
                                                  if (!val.match(/^[A-Za-z][A-Za-z" "]{0,}$/))
                                                  {
                                                      $("#name_3").html(' Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                      document.getElementById('hname').style.border="1px solid red"; 
                                                      document.getElementById('hname').value = "";
                                                      return false;
                                                  }
                                                  else
                                                  {
                                                    document.getElementById('hname').style.border="1px solid green";
                                                    return true;
                                                  }
                                                  
                                              }
                                              </script>	   		            		 
    </tr>
    
      <tr>
    <td>City</td>
        <td><input type="text" name="city"id="lname"onblur="Validatename2()";onblur="Validatename2()";></td>   <label class="errortext" style="display:nne; color:red" id="name_2"></label><br>
						  <script>
                                        function Validatename2()
                                            {
                                                  var val = document.getElementById('lname').value;
                                                  if (!val.match(/^[A-Za-z][A-Za-z" "]{0,}$/))
                                                  {
                                                      $("#name_2").html(' Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                       document.getElementById('lname').style.border="1px solid red";
                                                      document.getElementById('lname').value = "";
                                                      return false;
                                                  }
                                                   else{
                                                    document.getElementById('lname').style.border="1px solid green";
                                                    return true;
                                                  }
                                              }
                                              </script>	   
    </tr>
    
     <tr>
                    <td>
                         <label>State</label>
                    </td>
                    <td>
                        <select name="state">
                            <option value="Kerala">Kerala</option>
                            <option value="Mumbai">Mumbai</option>
							
							
                        </select>
                      </td>
                </tr>
    
    
      <tr>
    <td>Pincode</td>
        <td><input type="text" name="pincode" id="myform" maxlength="6"    ></td>
          
          <script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#myform" ).validate({
  rules: {
    field: {
      required: true,
      digits: true
    }
  }
});
</script>
        
    </tr>
    
    
      <tr>
    <td>Email</td>
        <td><input type="email" name="email" required></td>    	            		    
    </tr>
      <tr>
    <td>Password</td>
        <td><input type="password" name="password" id="pwd"required onblur="Validatepass()";></td> <label class="errortext" style="position:responsive;display:nne; color:red;" id="psw_2" ></label><br>
                                               <script>
                                              function Validatepass()
                                              {
                                                   var password = document.getElementById('pwd');
                                                     var filter = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
                                                     if (!filter.test(password.value)) {
                                                      password.value="";
                                                      $("#psw_2").html('Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters ').fadeIn().delay(4000).fadeOut();
                                                       document.getElementById('pwd').style.border="1px solid red"; 
                                                      return false;
                                                      }

                                                      else
                                                      {

                                                         document.getElementById('pwd').style.border="1px solid green"; return true;
                                                      }
                                                  
                                              }

                                              </script>
                                 
                                     
    </tr>
    <p><p></p>
      <tr>
    <td>Confirm Password</td>
        <td><input type="password" name="confirmpassword" id="cpwd"onblur="Validatecpassword()";></td> 
    </tr>
   
    <tr>
  
       <tr><td><input type="submit" value="Submit" style="position:relative;top:50px;left:90px;"></td>
        <td><input type="reset" value="reset" style="position:relative;top:50px;left:20px;"></td>
    </tr>
    
    
    </table>





</form>
   
<br><br><br><br>
<?php
//include("footer.php");
?>

<?php
if(isset($_POST['name'])){
	
	$a=$_POST['name'];
    $a1=$_POST['dob'];
	$b=$_POST['phone'];
    	$c=$_POST['housename'];
    	$d=$_POST['city'];
    	$e=$_POST['state'];
    	$f=$_POST['pincode'];
    	$g=$_POST['email'];
    	$h=$_POST['password'];
	  date_default_timezone_set('Asia/Calcutta'); 
$date=date("Y/m/d");
    $sql="select *from login where username='$g'";
    $tbl=getDatas($sql);
    $em1=$tbl[0][0];
    if($em1=='')
    {    
	$sql="insert into staffreg values(NULL,'$a','$a1','$b','$c','$d','$e','$f','$g','$date')";
	setDatas($sql);

    $sql1="insert into login values('$g','$h','staff',0)";
    setDatas($sql1);
        msgbox("Added successfully");
    	nextpage("home.php");
    }
    else
    {
        msgbox("Email already exist");
    }
}
?>