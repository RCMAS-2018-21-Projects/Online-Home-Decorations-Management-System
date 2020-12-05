<?php
session_start();
$user=$_SESSION['userid'];
include("../shares/db/mydatabase.inc");
 include("top.php");
?>
<head>
<style>
       
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
           
             
            }
            label{
                color: purple;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 200px;
                border-collapse: separate;
                border-spacing: 0 10px;
                
            }
    body{
        background-image: url(images/b4.jpg);
        background-position: center;
        background-size: cover;
    }
            .div1 {
    border-radius: 5px;
    background-color: beige;
    margin: auto;
   padding: 30px;
    width:50%;
}
input[type=submit] {
    background-color: green;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover {
    background-color: limegreen;
}
</style>
</head>
<div style="position:relative;top:100px;">

<?php
$sql="select * from staffreg where email='$user'";
$tbl=getDatas($sql);

?>

<div class="w3_login">
     <center>
    
      <div class="div1" style="position: relative;top:-50px;left:60px;">
          <br>
          <h2 style="position:relative;left:-50px;"><font color="black" ><b>My Profile</b></font> </h2>
        <form action="" method="post" >
          
            <table cellspacing="5" cellpadding="5" style="position:relative;top:40px;left:40px;"> 
                <tr>
                    <td>
                        <label> Name:</label>
                    </td>
                    <td>
                        <?php echo $tbl[0][1];?>
                      </td>
                </tr>
           <tr><td></td></tr>                       
                  <tr>
                    <td>
                        <label> Date of Birth:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][2];?>
                      </td>
                </tr>
               
                <tr><td></td><td></td></tr>
                
               <tr>
                    <td>
                        <label> Phone:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][3];?>
                      </td>
                </tr>
               
                <tr><td></td><td></td></tr>
                 <tr>
                    <td>
                        <label>House Name:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][4];?>
                      </td>
                </tr> <tr><td></td></tr>
        <tr>
                    <td>
                        <label> City:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][5];?>
                      </td>
                </tr>
               
                <tr><td></td><td></td></tr>
                  <tr>
                    <td>
                        <label>State:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][6];?>
                      </td>
                </tr>
               
                <tr><td></td><td></td></tr>
                
                 <tr>
                    <td>
                        <label> Pincode:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][7];?>
                      </td>
                </tr>
                <tr><td></td><td></td></tr>
                
                 <tr>
                    <td>
                        <label> Email:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][8];?>
                      </td>
                </tr>
                <tr><td></td><td></td></tr>
                 
        <tr><td></td><td>
                
                   </td></tr>
               <tr><td></td><td></td></tr>
                <tr><td>
                        <div class="w3l_header_right1">
      &emsp;&emsp;&emsp;&emsp;<h2><a href="edit.php"><font size="5px"  color="green">EDIT</font></a></h2>
    </div></td></tr>
            </table>    
        </form>
         </div>
           </center>
                                   </div>
        <div class="clearfix"></div>
    
