<?php session_start();
 include_once("../shares/db/mydatabase.inc"); 
 ?>
<?php
include("top.php");
?>
<html>
<head>
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
    background-color: #ffffff00;
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
    </head>
<body>
     <h1 style="position:relative;left:600px;top:30px;"> LOGIN</h1>
    <form action="" method="post">
    <table style="position:relative;top:80px;left:450px;">
        <tr>
        <td style="position:relative;top:20px;left:10px;">Email</td><td><input type="text" name="username" style="position:relative;top:20px;"></td>

        </tr>
      <tr></tr>
        
        <tr>
        <td style="position:relative;top:50px;left:-5px;">Password</td><td><input type="password" name="pwd"style="position:relative;top:50px;"></td>

        </tr>
        
        <tr></tr>
        <tr>
        </tr>
        <tr><input type="submit" value="Login" style="position:relative;top:250px;left:-600px;"></tr>
        
        </table>
    
    
    
    
    
    
    </form>
    
    
    
    
    
    </body>





</html>











<?php
		if(isset($_POST['username']))
		{
		   $a=$_POST['username'];
		   $b=$_POST['pwd'];
		   
		   $sql="select type,status from login where username='$a' and password='$b'";
		   $tbl=getDatas($sql);
		   $msg=mysql_error();
		   if($tbl<0)
		   {
			   $msg="inavlid login";
			   echo "<font color='white'>".$msg."</font>";	
		   }
		   if($msg=="")
		   {
			   if(count($tbl)>0)
			   {
				   if($tbl[0][0]==customer)
				   {
					   if($tbl[0][1]==0)
				   {
				   $_SESSION['userid']=$a;
				  nextPage( '../'.$tbl[0][0].'/home.php');
			   }
			   else
			   {
				   $msg="Sorry!!! You are not eligible for login!!";
				   echo"<script>alert('Sorry!!! You are not eligible for login!!');</script>";
				echo "<script> parent.location.href='../common/login.php'; </script>";
			   }
				   }
				   
				  else  if($tbl[0][0]==staff)
				   {
					   if($tbl[0][1]==1)
				   {
				   $_SESSION['userid']=$a;
				  nextPage( '../'.$tbl[0][0].'/home.php');
			   }
			   else
			   {
				   $msg="Sorry!!! You are not eligible for login!!";
				   echo"<script>alert('Sorry!!! You are not eligible for login!!');</script>";
				echo "<script> parent.location.href='../common/login.php'; </script>";
			   }
				   }
				   else{
					 $_SESSION['userid']=$a;
				  nextPage( '../'.$tbl[0][0].'/home.php');
			   }
			   
			   }
			   else{
				   
				   $msg="invalid";
				   echo"<script>alert('Invalid login !!!');</script>";
				echo "<script> parent.location.href='../common/login.php'; </script>";
			   }
				
		   
		}
		}
		
		?>